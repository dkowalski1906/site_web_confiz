<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const DB_DRIVER = 'mysql'; // pgsql pour les machines IUT, mysql si machine perso avec wamp, xamp, mamp
const DB_HOST = 'localhost'; // servbdd.iutlan.etu.univ-rennes1.fr pour les machines IUT, localhost si machine perso
const DB_PORT = 3306; // 5433 pour les machines IUT, 3306 pour machine perso, 8889 pour mac
const DB_USERNAME = 'root'; // votre login linux pour les machines IUT, root pour wamp, xamp, mamp
const DB_PASSWORD = ''; // votre mdp linux pour les machines IUT, rien pour wamp, xamp et root pour mamp
const DB_DATABASE = 'confiz'; // pg_VOTRELOGIN pour les machines IUT, le nom de votre base sinon

try {
    $PDO = new PDO(
        DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';port=' . DB_PORT,
        DB_USERNAME,
        DB_PASSWORD
    );
} catch (Exception $ex) {
    echo ($ex->getMessage());
    die;
}


/*
* requete() est une fonction basique pour interroger la base de donnée définie au dessus.
* Il vous est demandé d'utiliser les fonctions préparées avec PDO, voir la doc officielle
* donc cette fonction ne sera pas suffisante, vous devrez en créer d'autres plus pertinentes.
*/

function check_login($usr, $psw){
    $tab = get_psw_from_utilisateur($usr);
    $mdp_bdd = $tab[0]["password"];
    $hashed_mdp = md5($psw);
    if (($hashed_mdp === $mdp_bdd) && (($tab[0]["role"] === 'gerant') || ($tab[0]["role"] === 'admin'))){
        return $tab[0];
    }
    else{
        return 0;
    }
}

function get_psw_from_utilisateur($usr){
    global $PDO;
    $stmt = $PDO->prepare("select * from utilisateurs where username = :usr");
    $param = ["usr" => $usr];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function get_boutique_name_from_boutique_id($id_boutique){
    global $PDO;
    $stmt = $PDO->prepare("select boutiques.nom from boutiques where boutiques.boutique_id = :bou");
    $param = ["bou" => $id_boutique];
    $stmt->execute($param);
    return $stmt->fetchAll();
}


function get_boutique(){
    global $PDO;
    $stmt = $PDO->prepare("select * from boutiques");
    $stmt->execute();
    return $stmt->fetchAll();
}


function get_confiserie_from_boutique($id_boutique){
    global $PDO;
    $stmt = $PDO->prepare("select confiseries.nom, confiseries.confiserie_id, confiseries.img, confiseries.alt from confiseries inner join stocks on confiseries.confiserie_id = stocks.confiserie_id inner join boutiques on stocks.boutique_id = boutiques.boutique_id where boutiques.boutique_id = :bou");
    $param = ["bou" => $id_boutique];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function get_confiserie_from_confiserie_id($id_bonbon){
    global $PDO;
    $stmt = $PDO->prepare("select * from confiseries inner join stocks on confiseries.confiserie_id = stocks.confiserie_id where confiseries.confiserie_id = :bon");
    $param = ["bon" => $id_bonbon];
    $stmt->execute($param);
    return $stmt->fetchAll();
}


function update_quantite($quantite, $id_bonbon, $id_boutique){
    global $PDO;
    $stmt = $PDO->prepare("update stocks SET quantite = :qua where confiserie_id = :bon and boutique_id = :bou");
    $param = ["qua" => $quantite, "bon" => $id_bonbon, "bou" => $id_boutique];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function delete_bonbon($id_bonbon, $id_boutique){
    global $PDO;
    $stmt = $PDO->prepare("delete from stocks where confiserie_id = :bon and boutique_id = :bou");
    $param = ["bon" => $id_bonbon, "bou" => $id_boutique];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function get_bonbon(){
    global $PDO;
    $stmt = $PDO->prepare("select * from confiseries");
    $stmt->execute();
    return $stmt->fetchAll();
}

function add_bonbon($quantite, $id_bonbon, $id_boutique){
    global $PDO;
    $stmt = $PDO->prepare("insert into stocks(quantite, date_de_modification, boutique_id, confiserie_id)
    VALUES (:qua, NOW(), :bou, :bon);");
    $param = ["qua" => $quantite, "bon" => $id_bonbon, "bou" => $id_boutique];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function create_adresses_of_boutique($pays, $ville, $code_postal, $nom_adresse, $numero_rue){
    global $PDO;
    $stmt = $PDO->prepare("insert into adresses(pays, ville, code_postal, nom_adresse, numero_rue)
    VALUES (:pay, :vil, :cod, :adr, :rue);");
    $param = ["pay" => $pays, "vil" => $ville, "cod" => $code_postal, "adr" => $nom_adresse, "rue" => $numero_rue];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function create_utilisateurs_of_boutique($usr, $psw, $role, $nom, $prenom, $ddn){
    global $PDO;
    $stmt = $PDO->prepare("insert into utilisateurs(username, password, role, nom, prenom, ddn)
    VALUES (:usr, :psw, :rol, :pre, :nom, :ddn);");
    $param = ["usr" => $usr, "psw" => $psw, "rol" => $role, "pre" => $nom, "nom" => $nom, "ddn" => $ddn];
    $stmt->execute($param);
    return $stmt->fetchAll();
}

function get_adresse(){
    global $PDO;
    $stmt = $PDO->prepare("select adresse_id from adresses");
    $stmt->execute();
    return $stmt->fetchAll();
}

function get_utilisateurs(){
    global $PDO;
    $stmt = $PDO->prepare("select utilisateur_id from utilisateurs");
    $stmt->execute();
    return $stmt->fetchAll();
}

function create_boutique($nom_boutique, $img, $alt, $adresse, $utilisateur){
    global $PDO;
    $stmt = $PDO->prepare("insert into boutiques(nom, img, alt, adresse_id, utilisateur_id)
    VALUES (:bou, :img, :alt, :adr, :uti)");
    $param = ["bou" => $nom_boutique, "img" => $img, "alt" => $alt, "adr" => $adresse, "uti" => $utilisateur];
    $stmt->execute($param);
    return $stmt->fetchAll();
}
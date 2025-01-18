<?php

session_start();
require_once("db.php");


/*récupération des paramètres*/

$pays = $_POST["pays"];
$ville = $_POST["ville"];
$code_postal = $_POST["code_postal"];
$nom_adresse = $_POST["nom_adresse"];
$numero_rue = $_POST["numero_rue"];

$usr = $_POST["usr"];
$psw = $_POST["psw"];
$role = $_POST["role"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$ddn = $_POST["ddn"];

$nom_boutique = $_POST["nom_boutique"];
$img = $_POST["img"];
$alt = $_POST["alt"];


create_adresses_of_boutique($pays, $ville, $code_postal, $nom_adresse, $numero_rue);

create_utilisateurs_of_boutique($usr, $psw, $role, $nom, $prenom, $ddn);

$adresses = get_adresse();

$utilisateurs = get_utilisateurs();

$adresse = $adresses[count($adresses) -1][0];

$utilisateur = $utilisateurs[count($utilisateurs) -1][0];

create_boutique($nom_boutique, $img, $alt, $adresse, $utilisateur);

header("location: admin.php");
?>
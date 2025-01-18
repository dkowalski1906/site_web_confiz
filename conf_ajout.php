<?php

session_start();
require_once("db.php");


/*récupération des paramètres*/

$id_bonbon = $_GET["bonbon"];
$id_boutique = $_GET["boutique"];
$quantite = $_POST["quantite"];

/*ajout bonbon à partir de id_bonbon et id_boutique*/

add_bonbon($quantite, $id_bonbon, $id_boutique);

if ($_SESSION["role"] === 'gerant'){
    header("location: gerant.php");
}

elseif ($_SESSION["role"] === 'admin'){
    header("location: admin.php");
}
?>
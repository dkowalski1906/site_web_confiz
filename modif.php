<?php

session_start();
require_once("db.php");


/*récupération des paramètres*/

$quantite = $_POST["quantite"];
$id_bonbon = $_GET["bonbon"];
$id_boutique = $_GET["boutique"];

/*modification quantite à partir de la quantité indiquée*/

update_quantite($quantite, $id_bonbon, $id_boutique);

if ($_SESSION["role"] === 'gerant'){
    header("location: gerant.php");
}

elseif($_SESSION["role"] === 'admin'){
    header("location: admin.php");
}

?>
<?php
require_once("db.php");

$usr = $_POST["usr"];
$psw = $_POST["psw"];

$a = check_login($usr, $psw);

if ($a != 0){
    session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $a["utilisateur_id"];
    $_SESSION["username"] = $a["username"];
    $_SESSION["role"] = $a["role"];
}

if ($_SESSION["role"] === 'gerant'){
    header("location: gerant.php");
}

elseif ($_SESSION["role"] === 'admin'){
    header("location: admin.php");
}

else{
    header("location: index.php");
}


?>
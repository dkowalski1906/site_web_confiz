<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css"/>
  <link rel="shortcut icon" href="img/icon.png" type="icon">
</head>

<body>
<script src="app.js" defer></script>
  
  <div class="header">
    
    <img src="img/logo.png" class="logo">
  
    <div class="header-right">

<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  echo('
      <a href="logout.php" class="btn-login">Se déconnecter</a>
    ');
}

else {
  echo('
  <a class="btn-login" onclick="popUpConnexion()">Se connecter</a> 
  ');
}

?>

  </div>
</div>
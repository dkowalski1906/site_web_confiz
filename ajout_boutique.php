<?php
session_start();

require_once("./db.php");
include_once ("header.php");

echo('

<body>
    <div class="header-left">
        <a class="btn-retour" href="admin.php">Retour</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">Création boutique</h1>
      <ul class="grandebox">

    <form method="POST" action="conf_ajout_boutique.php">
        
        <input placeholder="nom boutique" type="text" name="nom_boutique" required>
        <input placeholder="image" type="text" name="img" required>
        <input placeholder="alt" type="text" name="alt" required>


        <input placeholder="pays" type="text" name="pays" required>
        <input placeholder="ville" type="text" name="ville" required>
        <input placeholder="code postal" type="text" name="code_postal" required>
        <input placeholder="nom adresse" type="text" name="nom_adresse" required>
        <input placeholder="numéro rue" type="text" name="numero_rue" required>

        <input placeholder="nom utilisateur" type="text" name="usr" required>
        <input placeholder="mot de passe" type="text" name="psw" required>
        <input placeholder="role" type="text" name="role" required>
        <input placeholder="nom" type="text" name="nom" required>
        <input placeholder="prénom" type="text" name="prenom" required>
        <input placeholder="date de naissance" type="text" name="ddn" required>

        <button type="submit">Créer</button> 
    </form>

    </ul>
    </main>
');


  
    include_once ("footer.php");

    echo('
    </body>
    </html>
    ');
  
  ?>
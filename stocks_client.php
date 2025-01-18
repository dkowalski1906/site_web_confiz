<?php

require_once("db.php");
include_once ("header.php");

/*récupération des paramètres*/

$id_boutique = $_GET["boutique"];

/*requetes sql pour récupérer le nom de la boutique à partir de boutique_id*/

$boutique = get_boutique_name_from_boutique_id($id_boutique);

/*requetes sql pour récupérer les bonbons à partir de boutique_id*/

$bonbons = get_confiserie_from_boutique($id_boutique);

echo('
<body>
    <div class="header-left">
      <a class="btn-retour" href="index.php">Retour</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">'.$boutique[0]["nom"].'</h1>
      <ul class="grandebox">
');


/*boucle pour afficher les bonbons et mettre en paramètre confiserie_id pour la page suivante*/

foreach($bonbons as $element){
    echo('
    <li>
        <a class="box" href="details_client.php?bonbon='.$element["confiserie_id"].'&boutique='.$id_boutique.'">
            <img src="img/'.$element["img"].'" class="image image_shadow" alt='.$element["img"].'>
            <button class="btn_boutik">Détails</button>
        </a>
    </li>
    ');
}

?>

        </ul>
    </main>
    <div id="id01" class="modal">

      <form class="modal-content animate" action="check_login.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
          <img src="img/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>utilisateur</b></label>
          <input type="text" placeholder="APicogna" name="usr" required>

          <label for="psw"><b>Mot de passe</b></label>
          <input type="password" placeholder="****" name="psw" required>

          <button class="selogin" type="submit">Connexion</button>

        </div>

        <div class="container">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Retour</button>
          <!-- <span class="psw"><a href="#">Mot de passe perdu ?</a></span> -->
        </div>
      </form>
    </div>

<?php
  
    include_once ("footer.php");
  
  ?>
  
</body>
</html>
</body>
</html>
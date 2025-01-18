<?php

require_once("db.php");
include_once ("header.php");

/*requetes sql pour récupérer les boutiques*/

$boutiques = get_boutique();

?>

<body>
    <main id="main">
      <h1 class="titre1_solo">Nos boutiques</h1>
      <ul class="grandebox">

<?php

/*boucle pour afficher les boutiques et mettre en paramètre boutique_id pour la page suivante*/

foreach($boutiques as $element){
    echo("
    <li>
          <a class='box' href='stocks_client.php?boutique=".$element['boutique_id']."'>
            <img src='img/".$element["img"]."' class='image image_shadow' alt='".$element["alt"]."'>
            <button class='btn_boutik'>Découvrir</button>
          </a>
    </li>    
    ");
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


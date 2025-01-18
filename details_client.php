<?php

require_once("db.php");
include_once ("header.php");

/*récupération des paramètres*/

$id_bonbon = $_GET["bonbon"];
$id_boutique = $_GET["boutique"];

/*requetes sql pour récupérer les détails des bonbons à partir de confiserie_id*/

$bonbons = get_confiserie_from_confiserie_id($id_bonbon);

/*affichage des détails*/

echo('
<body>
    <div class="header-left">
      <a class="btn-retour" href="stocks_client.php?boutique='.$id_boutique.'">Retour</a>
    </div>
    <main id="main">
        <h1 class="titre1_solo">'.$bonbons[0]["nom"].'</h1>
        <ul class="grandebox">
        <div class="descriptif">
          <img src="img/'.$bonbons[0]["img"].'" class="img-desc" alt="'.$bonbons[0]["alt"].'"></img>
          <div class="description">
            <div class="txt1">Type : '.$bonbons[0]["type"].'</div>
            <div class="txt2">Prix : '.$bonbons[0]["prix"].'€</div>
          </div>
        </div>
');

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
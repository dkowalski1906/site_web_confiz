<?php

session_start();

require_once("db.php");
include_once ("header.php");

/*requetes sql pour récupérer les boutiques*/

$boutiques = get_boutique();

echo('

<body>
    <div class="header-left">
        <a class="btn-ajout" href="ajout_boutique.php">Créer boutique</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">Boutiques</h1>
      <ul class="grandebox">
        
');

/*boucle pour afficher les boutiques et mettre en paramètre boutique_id pour la page suivante*/

foreach($boutiques as $element){
    echo("
    <li>
          <a class='box' href='produits_admin.php?boutique=".$element['boutique_id']."'>
            <img src='img/".$element["img"]."' class='image image_shadow' alt='".$element["alt"]."'>
            <button class='btn_boutik'>Découvrir</button>
          </a>
    </li>    
    ");
}
?>
        </ul>
    </main>
    <?php
  
    include_once ("footer.php");
  
  ?>
</body>
</html>


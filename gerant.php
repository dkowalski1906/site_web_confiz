<?php
session_start();

require_once("./db.php");
include_once ("header.php");

/*requetes sql pour récupérer les bonbons de la boutique du gérant*/

$bonbons = get_confiserie_from_boutique($_SESSION["id"]);


echo('

<body>
    <div class="header-left">
        <a class="btn-ajout" href="ajout.php?boutique='.$_SESSION["id"].'">Ajouter confiserie</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">Votre stock</h1>
      <ul class="grandebox">
        

');



foreach($bonbons as $element){
    echo("
    <li>
      <a class='box' href='details_gerant.php?bonbon=".$element['confiserie_id']."&boutique=".$_SESSION["id"]."'>
        <img src='img/".$element["img"]."' class='image image_shadow' alt='".$element["alt"]."'>
        
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
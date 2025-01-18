<?php
session_start();

require_once("./db.php");
include_once ("header.php");

$id_boutique = $_GET["boutique"];

/*requetes sql pour récupérer les bonbons de la boutique choisie*/

$bonbons = get_confiserie_from_boutique($id_boutique);

echo('

<body>
    <div class="header-left">
        <a class="btn-retour" href="admin.php">Retour</a>
        <a class="btn-ajout" href="ajout.php?boutique='.$id_boutique.'">Ajouter confiserie</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">'.$bonbons[0]["nom"].'</h1>
      <ul class="grandebox">
        

');



foreach($bonbons as $element){
    echo("
    <li>
      <a class='box' href='details_admin.php?bonbon=".$element['confiserie_id']."&boutique=".$id_boutique."'>
        <img src='img/".$element["img"]."' class='image image_shadow' alt='".$element["alt"]."'>
        <button class='btn_boutik'>Détails</button>
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
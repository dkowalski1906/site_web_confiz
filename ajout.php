<?php
session_start();

require_once("./db.php");
include_once ("header.php");


/*requetes sql pour récupérer tous les bonbons*/

$bonbons = get_bonbon();

if ($_SESSION["role"] === 'gerant'){

echo('

<body>
    <div class="header-left">
        <a class="btn-retour" href="gerant.php">Retour</a>
    </div>
    <main id="main">
      <h1 class="titre1_solo">Ajouter confiseries</h1>
      <ul class="grandebox">

    ');

    foreach($bonbons as $element){
        echo("
        <li>
          <p class='box'>
            <img src='img/".$element["img"]."' class='image image_shadow' alt='boutique mikaline'>
          </p>
          <form method='POST' action='conf_ajout.php?bonbon=".$element["confiserie_id"]."&boutique=".$_SESSION["id"]."'>
                <input type='text' name='quantite' placeholder='Quantité' required>
                <button type='submit'>Ajouter</button> 
            </form>
        </li>
        ");
    }

  }


  elseif ($_SESSION["role"] === 'admin'){

    $id_boutique = $_GET["boutique"];


    echo('

    <body>
        <div class="header-left">
            <a class="btn-retour" href="produits_admin.php?boutique='.$id_boutique.'">Retour</a>
        </div>
        <main id="main">
          <h1 class="titre1_solo">Ajouter confiseries</h1>
          <ul class="grandebox">
    
        ');
    
        foreach($bonbons as $element){
            echo("
            <li>
              <p class='box'>
                <img src='img/".$element["img"]."' class='image image_shadow' alt='boutique mikaline'>
              </p>
              <form method='POST' action='conf_ajout.php?bonbon=".$element["confiserie_id"]."&boutique=".$id_boutique."'>
                    <input type='text' name='quantite' placeholder='Quantité' required>
                    <button type='submit'>Ajouter</button> 
                </form>
            </li>
            ");
        }
    
      }
  
?>
</ul>

<?php
  
    include_once ("footer.php");
  
  ?>
  </body>
  </html>
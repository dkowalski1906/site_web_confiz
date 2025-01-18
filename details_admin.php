<?php
session_start();

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
      <a class="btn-retour" href="produits_admin.php?boutique='.$id_boutique.'">Retour</a>
      <a class="btn-ajout" href="suppr.php?boutique='.$id_boutique.'&bonbon='.$id_bonbon.'">Supprimer</a>
    </div>
    <main id="main">
        <h1 class="titre1_solo">'.$bonbons[0]["nom"].'</h1>
        <ul class="grandebox">
        <div class="descriptif">
          <img src="img/'.$bonbons[0]["img"].'" class="img-desc" alt="'.$bonbons[0]["alt"].'"></img>
          <div class="description">
            <div class="txt1">Type : '.$bonbons[0]["type"].'</div>
            <div class="txt2">Prix : '.$bonbons[0]["prix"].'€</div>
            <div class="txt3">Quantité : '.$bonbons[0]["quantite"].'</div>
            <form class="form-details" method="POST" action="modif.php?boutique='.$id_boutique.'&bonbon='.$id_bonbon.'">
                <input type="text" name="quantite" required>
                <button type="submit">Modifier la quantité</button> 
            </form>
          </div>
        </div>
');

?>

        </ul>
    </main>
    <?php
  
  include_once ("footer.php");

?>
</body>
</html>
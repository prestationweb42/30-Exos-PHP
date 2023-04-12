<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et Ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3>Personnage 1 : </h3>';
$nom = 'Marie';
$age = 30;
$homme = false;
echo '<p>Nom = ' . $nom . '</p>';
echo '<p>Age = ' . $age . '</p>';
echo '<p>Genre = ' . $homme . '</p>';
//
echo "<h3>Personnage 2</h3>";
$nom2 = 'Pierre';
$age2 = 32;
$homme2 = true;
echo '<p>Nom = ' . $nom2 . '</p>';
echo '<p>Age = ' . $age2 . '</p>';
echo '<p>Genre = ' . $homme2 . '</p>';
echo "<h3>Affichage de résultats</h3>";
// Ecriture du résultat en PHP
echo '<p>' . $nom . ' a ' . $age . ' ans et c\'est ' . ($homme ? "un homme" : "une femme") . '</p>';
?>
<!-- ecriture du résultat en HTML et PHP -->
<p>
    <?= $nom2 ?> a <?= $age2 ?> ans et c' est <?= ($homme2 ? "un homme" : "une femme") ?>
</p>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
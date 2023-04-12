<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les Tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser un programme qui va :</h3>';
echo '<h3> > Choisir 2 nombres aléatoires</h3>';
echo '<h3> > Calculer leur valeur absolue</h3>';
echo "<h3> > Afficher le résultat comme dans l'impression d'écran suivant :</h3>";
//----------------------
$chiffre1 = rand(25, 75);
$chiffre2 = rand(25, 75);
echo '<p>Chiffre 1 = ' . $chiffre1 . '</p>';
echo '<p>Chiffre 2 = ' . $chiffre2 . '</p>';
$resultat = abs($chiffre1 - $chiffre2);
if ($resultat > 25 && $resultat < 75) {
    echo "<p>La valeur absolue de $chiffre1 - $chiffre2 est comprise entre 25 et 75</p>";
} else {
    echo "<p>La valeur absolue de $chiffre1 - $chiffre2 n'est pas comprise entre 25 et 75</p>";
}
echo '<p>Résultat = ' . $resultat . '</p>';
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
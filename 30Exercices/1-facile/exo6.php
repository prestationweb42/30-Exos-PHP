<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle For"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser un programme qui va :</h3>';
echo '<h3> > Choisir un nombre aléatoire entre 5 et 15</h3>';
echo "<h3> > Afficher le cumul des n premiers nombres (n étant le nombre aléatoire)</h3>";
//----------------------
$chiffre1 = rand(5, 15);
$resultat = 0;
echo '<p>Table de = ' . $chiffre1 . '</p>';
for ($i = 1; $i <= $chiffre1; $i++) {
    $resultat += $i;
    echo "<p>Etape : $i - résultat = " . $resultat . "</p>";
}
echo "<h3> > Même exercice mais en sens inverse (à voir si c'est vraiment comme ça)</h3>";
$result = 0;
echo '<p>Table de = ' . $chiffre1 . '</p>';
for ($i = $chiffre1; $i >= 1; $i--) {
    $result += $i;
    echo "<p>Etape : " . ($chiffre1 - $i) + 1 . " - résultat = " . $result . "</p>";
}
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
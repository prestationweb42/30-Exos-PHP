<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle For"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser un programme qui va :</h3>';
echo '<h3> > Choisir 2 nombres aléatoires entre 1 et 15</h3>';
echo "<h3> > Afficher le résultat de la table de multiplication de ce chiffre aléatoire</h3>";
//----------------------
$chiffre1 = rand(1, 10);
echo '<p>Table de = ' . $chiffre1 . '</p>';
for ($i = 0; $i <= 10; $i++) {
    $result = $i * $chiffre1;
    echo "<p>$chiffre1 * $i = " . $chiffre1 * $i . "</p>";
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
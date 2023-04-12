<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<h1>Exo 1</h1>
<?php
echo '<p>Avant permutation : </p>';
$a = 3;
$b = 5;
$c = 7;
echo '<p>Variable a = ' . $a . '</p>';
echo '<p>Variable a = ' . $b . '</p>';
echo '<p>Variable a = ' . $c . '</p>';
echo "<p>Après permutation et création d'une variable temporaire pour a : </p>";
// Variable temporaire pour garder la valeur initiale de a
$tempo = $a;
$a = $b;
$b = $c;
$c = $tempo;
echo '<p>Variable a = ' . $a . '</p>';
echo '<p>Variable a = ' . $b . '</p>';
echo '<p>Variable a = ' . $c . '</p>';
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
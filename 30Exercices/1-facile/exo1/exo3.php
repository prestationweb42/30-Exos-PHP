<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les Tests - If()"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3>Vous devez réaliser un programme qui va :</h3>';
echo '<h3>>Choisir un nombre aléatoire entre 1 et 20</h3>';
echo '<h3>>En fonction de ce nombre, il affichera un des messages suivants :</h3>';
echo '<h4>> Il est compris entre 1 et 5</h4>';
echo '<h4>> Il est compris entre 6 et 10</h4>';
echo '<h4>> Il est compris entre 11 et 15</h4>';
echo '<h4>> Il est compris entre 16 et 20</h4>';
//----------------------
$num = rand(1, 20);
echo '<p>Nom = ' . $num . '</p>';
if ($num <= 5) {
    echo '<p>Il est compris entre 1 et 5 (' . $num . ')</p>';
} elseif ($num <= 10) {
    echo '<p>Il est compris entre 6 et 10 (' . $num . ')</p>';
} elseif ($num <= 15) {
    echo '<p>Il est compris entre 11 et 15 (' . $num . ')</p>';
} elseif ($num <= 20) {
    echo '<p>Il est compris entre 15 et 20 (' . $num . ')</p>';
} else {
    echo '<p>Il n\'est compris entre 1 et 20 (' . $num . ')</p>';
}
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
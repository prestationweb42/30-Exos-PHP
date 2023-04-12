<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser une fonction qui va vérifier si un nombre est pair ou impair :</h3>';
echo '<h3> > Le programme principal va se charger d\'afficher un message en fonction du résultat de la fonction</h3>';
echo '<h3> > Vous avez en données d\'entrées :</h3>';
//----------------------
$a = rand(1,1000);
echo $a;
echo "<br />";
$b = 122;
echo $b;
function writeMsg($test)
{
    if ($test % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
echo "<br />";
echo writeMsg($a) ? "Le nombre $a est pair" : "Le nombre $a est impair";
echo "<br />";
echo writeMsg($b) ? "Le nombre $b est pair" : "Le nombre $b est impair";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
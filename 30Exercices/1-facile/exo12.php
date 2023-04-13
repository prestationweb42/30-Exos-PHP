<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les Tableaux et Moyenne"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Créer 2 tableaux de notes pour 2 personnes</h3>";
echo "<h3> > Vous devez calculer la moyenne des notes de chaque personne et l'afficher à l'écran</h3>";
echo "<h3> > Vous avez les tableaux suivants :</h3>";
//----------------------
function moyenneNotes($tab)
{
    $moyenne = array_sum($tab) / count($tab);
    return $moyenne;
}
//----------------------
echo "Notes de Marc";
$Marc = [12, 15, 13, 7, 18];
echo "<pre>";
print_r($Marc);
echo "</pre>";
echo "<br />";
//----------------------
echo "Notes de Dan";
$Dan = [11, 14, 10, 4, 20, 8, 2];
echo "<pre>";
print_r($Dan);
echo "</pre>";
//----------------------
echo "<p>La moyenne des notes de Marc est de " . moyenneNotes($Marc) . ".</p>";
echo "<p>La moyenne des notes de Dan est de " . moyenneNotes($Dan) . ".</p>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
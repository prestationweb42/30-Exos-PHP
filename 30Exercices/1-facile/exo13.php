<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Les Tableaux et Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Réaliser une fonction qui va calculer la moyenne des notes d'un élève</h3>";
echo "<h3> > Créer 4 tableaux de notes pour 4 personnes</h3>";
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
echo "Notes de Pierre";
$Pierre = [5, 13, 9, 3];
echo "<pre>";
print_r($Pierre);
echo "</pre>";
//----------------------
echo "Notes de Paul";
$Paul = [6, 11, 15, 2];
echo "<pre>";
print_r($Paul);
echo "</pre>";
//----------------------
echo "<p>La moyenne des notes de Marc est de " . moyenneNotes($Marc) . ".</p>";
echo "<p>La moyenne des notes de Dan est de " . moyenneNotes($Dan) . ".</p>";
echo "<p>La moyenne des notes de Dan est de " . moyenneNotes($Pierre) . ".</p>";
echo "<p>La moyenne des notes de Dan est de " . moyenneNotes($Paul) . ".</p>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
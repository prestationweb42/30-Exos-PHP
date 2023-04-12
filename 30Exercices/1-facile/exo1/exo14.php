<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Les Tableaux - Tableau de Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > A partir de l'exercice précédent</h3>";
echo "<h3> > Créer un tableaux contenant tous les élèves (tableau de tableaux)</h3>";
echo "<h3> > Vous devez réaliser le même affichage que dans l'exercice précédent</h3>";
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
echo "<br />";
//----------------------
echo "Notes de Dan";
$Dan = [11, 14, 10, 4, 20, 8, 2];
echo "<br />";
//----------------------
echo "Notes de Pierre";
$Pierre = [5, 13, 9, 3];
echo "<br />";
//----------------------
echo "Notes de Paul";
$Paul = [6, 11, 15, 2];
echo "<br />";
//----------------------
$notesEleves = [$Marc, $Dan, $Pierre, $Paul];
echo "<pre>";
print_r($notesEleves);
echo "</pre>";

//----------------------
foreach ($notesEleves as $key => $note) {
    echo "<p>La moyenne des notes de  l'élève $key est : " . moyenneNotes($note) . ".</p>";
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
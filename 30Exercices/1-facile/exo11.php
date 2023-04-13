<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Manipulation d'un tableau avec des prénoms</h3>";
echo "<h3> > Vous devez réaliser un deuxième tableau qui va contenir d'autres prénoms</h3>";
echo "<h3> > Le programme principal va se charger d\afficher un message</h3>";
echo "<h3> > Vous avez les tableaux :</h3>";
//----------------------
$hommes = ["Dan", "Pierre", "Marc", "Jean"];
echo "<pre>";
print_r($hommes);
echo "</pre>";
//----------------------
$femmes = ["Morgane", "Mathilde", "Julie"];
echo "<pre>";
print_r($femmes);
echo "</pre>";
//----------------------
for ($i = 0; $i < count($hommes); $i++) {
    echo $i . " : " . $hommes[$i] . "<br />";
}
echo "---------------------------";
foreach ($femmes as $key => $femme) {
    echo "<p>" . $key . ' : ' . $femme . "</p>";
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
<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Les Tableaux - Tableau Associatif"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Vous avez 2 personnes Dan et Céline</h3>";
echo "<h3> > Chaque personne dispose d'un nom, d'un âge et d'un genre</h3>";
echo "<h3> > Représenter ces informations dans deux tableaux multidimensionnels (un par personne)</h3>";
echo "<h3> > Vous devez créer une fonction permettant l'affichage d'une personne</h3>";
echo "<h3> > Réaliser ensuite l'affichage demandé</h3>";
//----------------------
$dan = [
    "Nom" => "Dan",
    "Age" => 40,
    "Sexe" => true
];
$celine = [
    "Nom" => "Céline",
    "Age" => 30,
    "Sexe" => false
];
//----------------------
displayPerson($dan);
displayPerson($celine);
// fonction
function displayPerson($person)
{
    foreach ($person as $key => $value) {
        echo "<p>" . $key . " : " . $value . "</p>";
    }
}
//----------------------
echo "----------------------";
displayPerson2($dan);
displayPerson2($celine);
function displayPerson2($person)
{
    echo "<p>Nom : " . $person['Nom'] . "</p>";
    echo "<p>Age : " . $person['Age'] . "</p>";
    if ($person['Sexe']) {
        echo "<p>Sexe : Homme</p>";
    } else {
        echo "<p>Sexe : Femme</p>";
    }
    echo "----------------------";
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
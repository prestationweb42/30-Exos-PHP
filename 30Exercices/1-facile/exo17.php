<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableaux Complexes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Reprendre l'exercice précédent et rajouter un tableau de notes pour chaque personne</h3>";
echo "<h3> > Nous aurons donc un tableau de tableaux contenant chacun encore un tableau</h3>";
echo "<h3> > Réaliser ensuite l'affichage demandé</h3>";
//----------Tableau général------------
$tabPersons = [
    $dan = [
        "Nom" => "Dan",
        "Age" => 40,
        "Sexe" => true,
        "Notes" => [13, 5, 15, 10]
    ],
    $celine = [
        "Nom" => "Céline",
        "Age" => 30,
        "Sexe" => false,
        "Notes" => [12, 5, 15, 10]
    ],
    $marc = [
        "Nom" => "Marc",
        "Age" => 25,
        "Sexe" => true,
        "Notes" => [11, 5, 15, 10]
    ],
    $nathalie = [
        "Nom" => "Nathalie",
        "Age" => 21,
        "Sexe" => false,
        "Notes" => [10, 5, 15, 10]
    ]
];
//----------OU tableau reprenant les tableaux individuels------------
//----------Respecter l'ordre de déclaration des tableaux------------
// $tabPersons = [$dan, $celine, $marc, $nathalie];

//----------Boucle qui appelle la fonction displayPerson()------------
foreach ($tabPersons as $person) {
    displayPerson($person);
};

//----------------------
function displayPerson($person)
{
    echo "<p>Nom : " . $person['Nom'] . "</p>";
    echo "<p>Age : " . $person['Age'] . "</p>";
    if ($person['Sexe']) {
        echo "<p>Sexe : Homme</p>";
    } else {
        echo "<p>Sexe : Femme</p>";
    };
    // on boucle dans le sous-tableau des notes pour les afficher avec les indexes
    foreach ($person['Notes'] as $key => $value) {
        // echo "<p>Note " . $key + 1 . " = " . $value . "</p>";
        echo "<p>Note " . ($key + 1) . " =  $value </p>";
    };
    $moyenne = array_sum($person['Notes']) / count($person['Notes']);
    echo "<p>La moyenne des notes est :  $moyenne points</p>";

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
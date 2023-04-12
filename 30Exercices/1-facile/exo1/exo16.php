<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableaux de Tableaux Associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo "<h3> > Reprendre l'exercice précédent et rajouter 2 autres personnes</h3>";
echo "<h3> > Faire un tableau contenant chacune des personnes</h3>";
echo "<h3> > Réaliser ensuite l'affichage demandé</h3>";
//----------Tableau général------------
$tabPersons = [
    $dan = [
        "Nom" => "Dan",
        "Age" => 40,
        "Sexe" => true
    ],
    $celine = [
        "Nom" => "Céline",
        "Age" => 30,
        "Sexe" => false
    ],
    $marc = [
        "Nom" => "Marc",
        "Age" => 25,
        "Sexe" => true
    ],
    $nathalie = [
        "Nom" => "Nathalie",
        "Age" => 21,
        "Sexe" => false
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
require "../../global/common/template.php";
?>
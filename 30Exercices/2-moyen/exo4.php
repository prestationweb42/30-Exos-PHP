<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les Objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
// Class Animal
class Animal
{
    public $nom;
    public $age;
    public $type;
    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }
}
// instancier
$Mina = new Animal('Mina', 2, 'chien');
$Hocket = new Animal('Hocket', 6, 'chien');
$Tya = new Animal('Tya', 7, 'chat');
$Milo = new Animal('Milo', 4, 'chat');

// Tableau global
/**
 * ********* COURS ********* 
 * attention avec une une classe, 
 * le tableau n'est plus un tableau associatif
 * mais un OBJET
 * il faut modifier les fonctions de l'exercice précédent
 * pour que tout fonctionne
 */
$animaux = [$Mina, $Hocket, $Tya, $Milo];

// fonction afficher tableau chat/chien
// function afficherTabAnimaux($tab)
// {
//     foreach ($tab as $value) {
//         foreach ($value as $infoPets => $pet) {
//             echo "<p>" . $infoPets . " : " . $pet . "</p>";
//         }
//         echo "-----------------";
//     }
// }
//
// OU variante écriture fonction SANS paramètre MAIS avec variable globale
// si la fonction ne sert qu'une seule fois !!!!!!!!!!!!
function afficherTabAnimaux2()
{
    // ON RÉCUPÈRE DIRECTEMENT LE TABLEAU DES ANIMAUX DANS LA FONCTION comme ceci
    global $animaux;
    foreach ($animaux as $animal) {
        echo "<p> Nom : " . $animal->nom . "</p>";
        echo "<p>Age : " . $animal->age . "</p>";
        echo "<p>Type : " . $animal->type . "</p>";
        echo "-----------------";
    }
}
// fonction afficher type animaux -> chat/chien
function afficherTabAnimauxType($type)
{
    global $animaux;
    foreach ($animaux as $animal) {
        if ($animal->type === $type) {
            echo "<p> Nom : " . $animal->nom . "</p>";
            echo "<p>Age : " . $animal->age . "</p>";
            echo "<p>Type : " . $animal->type . "</p>";
            echo "-----------------";
        }
    }
};

?>
<div class="row text-center">
    <div class="col-4">
        <h2 class="bg-danger text-white rounded border-10 pt-2 pb-2">Sélectionner le type</h2>
        <a href="?type=tous" class="btn btn-danger">TOUS</a>
        <a href=" ?type=chien" class="btn btn-primary">CHIENS</a>
        <a href="?type=chat" class="btn btn-success">CHATS</a>
        <?php
        if (isset($_GET['type'])) {
            $got = $_GET['type'];
            echo '<div class="text-center bg-light mt-4">';
            echo "<p class='text-uppercase pt-2 pb-2'>" . $got . "</p>";
            echo "</div>";
        }
        if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== 'tous') {
            echo '<div class="text-center bg-light mt-4 pt-2 pb-2">';
            if ($_GET['type'] === 'chien') {
                afficherTabAnimauxType('chien');
            } else {
                afficherTabAnimauxType('chat');
            }
            echo "</div>";
        } else {
            echo '<div class="text-center bg-light mt-4 pt-2 pb-2">';
            afficherTabAnimaux2();
            echo "</div>";
        }
        ?>
    </div>
    <div class="col-4">
        <h2 class="bg-primary text-white rounded pt-2 pb-2">Chiens</h2>
        <?php
        // on appelle la fonction sans paramètre -> si elle ne sert qu'une fois !!!!!!
        afficherTabAnimauxType("chien");
        echo "<br />";
        // echo "-----------------";
        echo "<br />";

        ?>
    </div>
    <div class="col-4">
        <h2 class="bg-success text-white rounded pt-2 pb-2">Chats</h2>
        <?php
        //afficherTableau($tab2);
        afficherTabAnimauxType("chat");
        echo "<br />";
        // echo "-----------------";
        echo "<br />";
        ?>
    </div>
</div>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
// require "../../global/common/template.php";
require "../global/common/template.php";
?>
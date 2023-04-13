<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser une fonction qui va supprimer les voyelles d\'un mot et qui le renverra</h3>';
echo '<h3> > Le programme principal va se charger d\'afficher un message</h3>';
echo '<h3> > Vous avez le mot :</h3>';
//----------------------
$monMot = "Coucou";
echo $monMot;
echo "<br />";
// Mot sans voyelle
$monMotSansVoyelle = supprimerVoyelle($monMot);
echo "$monMot sans voyelle est $monMotSansVoyelle";
echo "<br />";
function supprimerVoyelle($mot)
{
    // on place les voyelles dans un tableau
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    // on utilise la fonction str_replace() de la manière suivante :
    // on crée le tablau des voyelles (lettres à remplacer) et
    // on indique par quoi on les remplace, ici un espace vide et
    // quel mot on utlise, ici le mot passé en paramètre 
    $yourString = str_replace($vowels, "", $mot);
    return $yourString;
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
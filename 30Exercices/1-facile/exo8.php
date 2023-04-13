<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La Boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser un programme qui va :</h3>';
echo '<h3> > Choisir un nombre aléatoire entre 1 et 20</h3>';
echo "<h3> > Recommencer le choix du nombre tant que celui-ci n'est pas supérieur à 15</h3>";
//----------------------
$random = abs(rand(1, 20));
$i = 1;
echo "<p>$random</p>";
echo gettype($random) . "<br>";
while ($random <= 15) {
    echo "Essai <b>$i</b> : <b>$random</b> est trop petit (<15) <br>";
    $i++;
    $random++;
}
echo "Super : <b>$random</b> est supérieur à 15 <br>";





?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
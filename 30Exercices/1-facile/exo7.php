<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Le Switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
echo '<h3> > Vous devez réaliser un programme qui va :</h3>';
echo '<h3> > Choisir un nombre aléatoire entre 1 et 12</h3>';
echo "<h3> > Afficher le mois en lettres en fonction du nombre aléatoire</h3>";
//----------------------
$random = abs(rand(1, 12));
echo "<p>$random</p>";
echo gettype($random) . "<br>";
switch ($random) {
    case 1:
        if ($random === 1) {
            echo "Le mois $random en chiffres correspond au moi de <b>Janvier</b> en lettres";
        }
        break;
    case 2:
        if ($random === 2) {
            echo "Le mois $random en chiffres correspond au moi de <b>Février</b> en lettres";
        }
        break;
    case 3:
        if ($random === 3) {
            echo "Le mois $random en chiffres correspond au moi de <b>Mars</b> en lettres";
        }
        break;
    case 4:
        if ($random === 4) {
            echo "Le mois $random en chiffres correspond au moi de <b>Avril</b> en lettres";
        }
        break;
    case 5:
        if ($random === 5) {
            echo "Le mois $random en chiffres correspond au moi de <b>Mai</b> en lettres";
        }
        break;
    case 6:
        if ($random === 6) {
            echo "Le mois $random en chiffres correspond au moi de <b>Juin</b> en lettres";
        }
        break;
    case 7:
        if ($random === 7) {
            echo "Le mois $random en chiffres correspond au moi de <b>Juillet</b> en lettres";
        }
        break;
    case 8:
        if ($random === 8) {
            echo "Le mois $random en chiffres correspond au moi de <b>Août</b> en lettres";
        }
        break;
    case 9:
        if ($random === 9) {
            echo "Le mois $random en chiffres correspond au moi de <b>Septembre</b> en lettres";
        }
        break;
    case 10:
        if ($random === 10) {
            echo "Le mois $random en chiffres correspond au moi de <b>Octobre</b> en lettres";
        }
        break;
    case 11:
        if ($random === 11) {
            echo "Le mois $random en chiffres correspond au moi de <b>Novembre</b> en lettres";
        }
        break;
    case 12:
        if ($random === 12) {
            echo "Le mois $random en chiffres correspond au moi de <b>Décembre</b> en lettres";
        }
        break;
    default:
        echo "Le mois $random ne correspond pas";
}
echo "<h3> > Afficher la semaine en lettres en fonction du nombre aléatoire - écriture du switch différent</h3>";
$random2 = rand(1, 7);
$semaine = "";
switch ($random2) {
    case 1:
        $semaine = "Lundi";
        break;
    case 2:
        $semaine = "Mardi";
        break;
    case 3:
        $semaine = "Mercredi";
        break;
    case 4:
        $semaine = "Jeudi";
        break;
    case 5:
        $semaine = "Vendredi";
        break;
    case 6:
        $semaine = "Samedi";
        break;
    case 7:
        $semaine = "Dimanche";
        break;
    default:
        echo "le chiffre ne correspond pas";
        break;
}

echo "le chiffre <b>$random2</b> correspond au <b>$semaine</b>";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
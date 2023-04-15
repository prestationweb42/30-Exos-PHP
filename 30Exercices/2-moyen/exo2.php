<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Fichier de fonctions et affichage dans un tableau"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
// inclusion du  fichier index.php avec les fonctions
require_once('index.php');

// déclarer un tableau vide pour les lignes
$tab1 = [2, 6, 10, 20, 9, 14];
$tab2 = [4, 8, 2, 26, 18, 14];

?>
<div class="row text-center">
    <div class="col-6">
        <h2>Tableau 1</h2>
        <?php
        afficherTableau($tab1);
        echo "<br />";
        echo "-----------------";
        echo "<br />";
        echo "La moyenne du tableau 1 est de : " . calculerMoyenne($tab1);
        echo "<br />";
        echo "-----------------";
        echo "<br />";
        echo estTableauPair($tab1) ? "<p>Le tableau 1 est pair</p>" : "<p>Le tableau 1 est impair</p>";
        echo "-----------------";
        echo "<br />";
        echo "Fonction variante";
        echo estTableauPair2($tab1) ? "<p>Le tableau 1 contient UNIQUEMENT des valeurs paires</p>" : "<p>Le tableau 1 contient des valeurs paires ET impaires</p>";
        ?>
    </div>
    <div class="col-6">
        <h2>Tableau 2</h2>
        <?php
        afficherTableau($tab2);
        echo "<br />";
        echo "-----------------";
        echo "<br />";
        echo "La moyenne du tableau 2 est de : " . calculerMoyenne($tab2);
        echo "<br />";
        echo "-----------------";
        echo estTableauPair($tab2) ? "<p>Le tableau 2 est pair</p>" : "<p>Le tableau 1 est impair</p>";
        echo "-----------------";
        echo "<br />";
        echo "Fonction variante";
        echo "<br />";
        echo estTableauPair2($tab2) ?
            "<p>Le tableau 2 contient UNIQUEMENT des valeurs paires</p>" : "<p>Le tableau 2 contient des valeurs paires ET impaires</p>";

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
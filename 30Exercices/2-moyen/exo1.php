<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les tables de multiplications"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
// déclarer un tableau vide pour les lignes
$ligne = [];
// on boucle pour générer les lignes
for ($j = 1; $j <= 10; $j++) {
    // on déclare un tableau vide pour les colonnes
    $colonne = [];
    // on boucle pour générer les colonnes
    for ($i = 1; $i <= 10; $i++) {
        // on remplie les colonnes par les multiplications
        $colonne[] = $i * $j;
    }
    // on remplie les lignes avec le résultat des colonnes 
    $ligne[] = $colonne;
}
// echo "<pre>";
// print_r($ligne);
// echo "</pre>";

?>
<table class="table">
    <?php
    for ($j = 0; $j < 10; $j++) { ?>
    <tr <?= ($j === 0) ? 'class="font-weight-bold"' : '' ?>>
        <?php for ($i = 0; $i < 10; $i++) { ?>
        <td <?= ($i === 0) ? 'class="font-weight-bold"' : '' ?>>
            <?= $ligne[$j][$i] ?>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>

</table>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
// require "../../global/common/template.php";
require "../global/common/template.php";
?>
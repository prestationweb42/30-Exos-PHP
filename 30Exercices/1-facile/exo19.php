<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 19 : Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="POST">
    <div class="form-group">
        <label for="age">Num : </label>
        <input type="number" name="age" id="age" class="form-control" required>
    </div>
    <input type="submit" class="btn btn-lg btn-primary" value="Valider">
</form>

<?php
if (
    isset($_POST['age']) && !empty($_POST['age'])
) {
    echo "<p>" . $_POST['age'] . "</p>";
};

//-----------------
$a = $_POST['age'];
echo "<br />";
function testPair($test)
{
    if ($test % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
echo "<br />";
echo testPair($a) ? "Le nombre $a est pair" : "Le nombre $a est impair";
echo "<br />";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaire et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action ="" method ="POST">
    <div class="form-group">
        <label> Note 1 : </label>
        <input type="number" class="form-control" name="note1" required>
    </div>
    <div class="form-group">
        <label> Note 2 : </label>
        <input type="number" class="form-control" name="note2" required >
    </div>
    <div class="form-group">
        <label> Note 3 : </label>
        <input type="number" class="form-control" name="note3" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>

<?php
if(isset($_POST['note1']) && !empty($_POST['note1']) &&
isset($_POST['note2']) && !empty($_POST['note2']) &&
isset($_POST['note3']) && !empty($_POST['note3'])){
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];
    $note3 = $_POST['note3'];
    $notes = [$note1,$note2,$note3];
    $moyenne = calculerMoyenne($notes);
    echo "<h2> La moyenne des " . count($notes) . " notes est de : " . $moyenne . " </h2>";
}

function calculerMoyenne($notes){
    $resultat = 0;
    foreach($notes as $note){
        $resultat += $note;
    }
    return $resultat / count($notes);
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

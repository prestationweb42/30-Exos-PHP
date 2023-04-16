<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & Getter"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
// Class Animal
class Livre
{
    private $nom;
    private $edition;
    private $auteur;
    private $dateParution;

    // mis en place de 2 getter pour permettre l'affichage de certaines propriétés qui sont déclarées en private
    public function getEdition()
    {
        return $this->edition;
    }
    public function getDateParution()
    {
        return $this->dateParution;
    }

    // constructeur
    public function __construct($nom, $edition, $auteur, $dateParution)
    {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->dateParution = $dateParution;
    }
    /**
     * Magic Methods
     * __toString
     * va permettre d'afficher la librairie avec un 'simple' echo dans 
     * fonction afficherLibrairie()
     * @return string
     */
    public function __toString()
    {
        $txt = "<p>Nom : " . $this->nom . "</p>";
        $txt .= "<p>Edition : " . $this->edition . "</p>";
        $txt .= "<p>Auteur : " . $this->auteur . "</p>";
        $txt .= "<p>Date de parution : " . $this->dateParution . "</p>";
        return $txt;
    }
}

// instanciation de la classe livre
$livre1 = new Livre('Pauline', "Gallimard", 'Alexandre Dumas', 2000);
$livre2 = new Livre('tonton2', "Flammarion", 'toto', 2001);
$livre3 = new Livre('abelix', "Spinelle", 'titi', 2002);
$livre4 = new Livre('La cuisine et la patisserie', "Gallimard", 'Michel Oliver', 2000);
$livre5 = new Livre('abelix3', "Flammarion", 'tutu', 2001);

// Tableau global
/**
 * ********* COURS ********* 
 * attention avec une une classe, 
 * le tableau n'est plus un tableau associatif
 * mais un OBJET
 * il faut modifier les fonctions de l'exercice précédent
 * pour que tout fonctionne
 */
$librairie = [$livre1, $livre2, $livre3, $livre4, $livre5];


// fonction afficher tous des livres
function afficherLibrairie($livres)
{
    foreach ($livres as $livre) {
        echo '<div class="text-center bg-light mt-4 pt-2 pb-2">';
        echo $livre;
        echo "-----------------";
        echo "</div>";
    }
}


// fonction afficher les livres selon critère(s)
function afficherLivres($livres, $edition, $date)
{
    foreach ($livres as $livre) {
        if (($livre->getEdition() === $edition || $edition === "tous") && $livre->getDateParution() ===  intval($date) || $date === 'tous') {
            echo '<div class="text-center bg-light mt-4 pt-2 pb-2">';
            echo $livre;
            echo "-----------------";
            echo "</div>";
        }
    }
}


?>
<div class="row text-center">
    <div class="col-4">
        <h2 class="bg-danger text-white rounded border-10 pt-2 pb-2">Sélectionner le livre</h2>
        <form method="post" action="" class="mt-5">
            <div class="mb-3">
                <label for="edition" class="form-label">Edition</label>
                <select class="form-control" id="edition" name="edition">
                    <option value="tous">Tous</option>
                    <option value="Flammarion">Flammarion</option>
                    <option value="Gallimard">Gallimard</option>
                    <option value="Spinelle">Spinelle</option>
                </select>
            </div>
            <div class="mb-3 mt-5">
                <label for="date" class="form-label">Date de parution</label>
                <select class="form-control" id="date" name="date">
                    <option value="tous">Tous</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2003">2004</option>
                </select>
            </div>
            <input type="submit" value="Validez" class="btn btn-primary">
        </form>


    </div>
    <div class="col-4">
        <h2 class="bg-primary text-white rounded pt-2 pb-2">Livre Recherché</h2>
        <?php
        // appel de la fonction du livre recherché selon critère(s)
        if (
            isset($_POST['edition']) && !empty($_POST['edition']) &&
            isset($_POST['date']) && !empty($_POST['date'])
        ) {

            // afficherLivres($librairie, $_POST['edition'], $_POST['date']);
            afficherLivres($librairie, $_POST['edition'], $_POST['date']);
        } else {
            afficherLibrairie($librairie);
        }
        ?>
    </div>
    <div class="col-4">
        <h2 class="bg-success text-white rounded pt-2 pb-2">Librairie</h2>
        <?php
        // appel de la fonction
        afficherLibrairie($librairie);
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
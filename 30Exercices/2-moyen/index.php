<?php
// Fichier en laison avec le fichier Exo2

// fonction  afficher les tableaux
/*-----------------------*/
function afficherTableau($tab)
{
    foreach ($tab as $key => $value) {
        // ne met pas de tiret devant le premier nombre
        echo ($key === 0) ? "" : " - ";
        echo $value;
    }
}
//
// fonction  calculer moyenne de chaque tableau
function calculerMoyenne($tab)
{
    $moyenne = array_sum($tab) / count($tab);
    return $moyenne;
}
//
// fonction est pair ou impair avec la somme du tableau
function estTableauPair($tab)
{
    $sumTab = array_sum($tab);
    if ($sumTab % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
// fonction variante pour tester si chaque nb du tableau est pair ou impair 
function estTableauPair2($tab)
{
    foreach ($tab as $value) {
        if ($value % 2 !== 0) return false;
    }
    return true;
}

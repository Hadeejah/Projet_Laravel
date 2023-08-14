<?php
$cote=rand(2,18);
echo("Le coté est:".$cote."\n");
function calculPerimetre($cote){
    $perim=$cote*4;
    return $perim;
}
/*1er manière pour afficher le périmètre aprés l'avoir stocké dans une variable (aprés avoir créer la fonction)*/
$perimetre=calculPerimetre($cote);
echo("Le perimetre est :".$perimetre."\n");
/* 2em manière pour afficher le perimetre aprés avoir créer une fonction*/
/* echo("Le perimetre est :".calculPerimetre($cote)."\n");*/

function calculSurface($cote){
    $surf=$cote**2;
    return $surf;
}
$surface=calculSurface($cote);
echo("La surface est :".$surface."\n");

function calculDiagonale($cote){
    $diag=sqrt($cote**2+$cote**2);
    return $diag;
}
$diagonale=calculDiagonale($cote);
echo("La diagonale est :".$diagonale."\n");








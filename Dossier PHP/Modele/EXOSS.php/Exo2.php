<?php
$long=rand(10,25);
echo("La longueur est:".$long."\n");
$larg=rand(2,8);
echo("la largeur est:".$larg."\n");

function calculPerimetreRectangle($long,$larg){
    $perim=($long+$larg)*2;
    return $perim;
}
$perimrectangle=calculPerimetreRectangle($long,$larg);
echo("le perimetre du rectangle est:".$perimrectangle."\n");

function calculSurfaceRectangle($long,$larg){
    $surf=$long*$larg;
    return $surf;
}

$surfRect=calculSurfaceRectangle($long,$larg);
echo("la surface du rectangle est :".$surfRect."\n");

function calculDiagonale($long,$larg){
    $diag=sqrt(($long**2+$larg**2));
    return $diag;
}
 
$diagonaleRect= calculDiagonale($long,$larg);
echo("La diagonale du rectangle est :".$diagonaleRect."\n");
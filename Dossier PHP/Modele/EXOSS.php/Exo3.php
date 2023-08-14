<?php
$nbr1=rand(3,16);
echo("le premier nombre est:".$nbr1."\n");
$nbr2=rand(10,20);
echo("le premier nombre est:".$nbr2."\n");

function calculSomme($nbr1,$nbr2){
    $somme=$nbr1+$nbr2;
    return $somme;
}

$s=calculSomme($nbr1,$nbr2);
echo("la somme est :".$s."\n");

$nbr3=rand(15,25);
echo("le premier nombre est:".$nbr3."\n");
$nbr4=rand(3,10);
echo("le deuxieme nombre est:".$nbr4."\n");
 
function calculDifference($nbr3,$nbr4){
    $difference=$nbr3-$nbr4;
    return $difference;
}

$diff=calculDifference($nbr3,$nbr4);
echo("la différence est :".$diff."\n");

$nbr5=rand(2,9);
echo("le premier nombre est :".$nbr5."\n");
$nbr6=rand(10,18);
echo("le deuxieme nombre est :".$nbr6."\n");

function calculProduit($nbr5,$nbr6){
    $produit=$nbr5*$nbr6;
    return $produit;
}

$multipli=calculProduit($nbr5,$nbr6);
echo("le pro");
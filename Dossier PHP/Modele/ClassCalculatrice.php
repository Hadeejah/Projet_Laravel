<?php
class Calculatrice{
    private $nbre1;
    private $nbre2;
  
    public function __construct(){
        $this->nbre1=rand(20,40);
        $this->nbre2=rand(3,15);
    }

    public function calculSomme(){
        return $this->nbre1+$this->nbre2;
    }

    public function getNbre1(){
        return $this->nbre1;
    }
    public function getNbre2(){
        return $this->nbre2;
    }

    public function calculDifference(){
        return $this->nbre1-$this->nbre2;
    }

    public function calculProduit(){
        return $this->nbre1*$this->nbre2;
    }

    public function calculDivision(){
        return $this->nbre1/$this->nbre2;
    }

    public function calculExponentiel(){
        return $this->exp(nbre1);
    }


    public function calculModulo(){
        return $this->nbre1 % $this->nbre2;
    }

}

$Calculatrice= new Calculatrice();
echo('le premier nombre est : '.$Calculatrice->getNbre1().'<br>');
echo('le deuxieme nombre est : '.$Calculatrice->getNbre2().'<br>');

echo('la somme est : '.$Calculatrice->calculSomme().'<br>');

echo('la difference est : '.$Calculatrice->calculDifference().'<br>');

echo('le produit est : '.$Calculatrice-> calculProduit().'<br>');

echo('la division est : '.$Calculatrice-> calculDivision().'<br>');

echo('le modulo est : '.$Calculatrice-> calculModulo());
/* 
echo('lExponentiel est :') */
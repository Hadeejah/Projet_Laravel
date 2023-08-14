<?php
class Rectangle{
    private $long;
    private $larg;

    public function __construct(){
        
        $this->long=rand(12,20);
        $this->larg=rand(2,10);
    }

    public function calculPerimetre(){
        $perim=($this->long+$this->larg)*2;
        return $perim;
       
    }
    
    public function calculSurface(){
        $surf=$this->long*$this->larg;
        return $surf;
    }

    public function calculDiagonale(){
        $diag=sqrt($this->long**2+$this->larg**2);
        return $diag;
    }


}



$Rectangle=new Rectangle();
echo('le perimetre est :'.$Rectangle->calculPerimetre().'<br>');

echo('la surface est :'.$Rectangle->calculSurface().'<br>');

echo('la diagonale est :'.$Rectangle->calculDiagonale()); 
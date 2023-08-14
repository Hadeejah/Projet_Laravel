<?php
class Carre{
   private $cote;

    public function __construct(){
        $this->cote=rand(2,10);
    }
    
    public function calculPerimetre(){
        $perim=$this->cote*4;
        return $perim;
    }
    
    public function calculSurface(){
        $surf=$this->cote**2;
        return $surf;
    }
    
    public function calculDiagonale(){
        $diag=sqrt($this->cote**2+$this->cote**2);
        return $diag;
    }
    
}







<?php
 
 class MarqueModel{
   private $pdo;

   public function __construct(){
      $this->pdo =  new PDO("mysql:dbhost=localhost;dbname=demo","root","Reg@rder20");
   }

   public function getAllMarque()
   {
      $requete= "SELECT *FROM Marque";
      $statement=$this->pdo->prepare($requete);
      $statement->execute();

      return $statement->fetchAll();
   } 
   
   public function insererMarque($data)
   {
      $requete= "INSERT INTO Marque (libelle) VALUES(?)";
      $statement=$this->pdo->prepare($requete);
      $statement->bindValue(1, $data);
      return $statement->execute();
   } 

}
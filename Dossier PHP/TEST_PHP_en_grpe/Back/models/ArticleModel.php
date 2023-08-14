<?php
class ArticleModel{
    public function all()
    {
     $db=new PDO('mysql:host=localhost;dbname=GestionArticle','root','Reg@rder20');
     $requete='SELECT * FROM Article';
     $result=$db->query($requete);
     $articles=$result->fetchAll();
     return $articles;
    }

    public function insert($data)
    {
        $db=new PDO('mysql:host=localhost;dbname=GestionArticle','root','Reg@rder20');
        $requete='INSERT INTO Article(libelle, prix) VALUES(:libelle, :prix)';
        $result = $db->prepare($requete);
        $result->bindParam(1, $data['']);
        $result->bindParam(libelle, $data['']);
        return $result;
    }
}

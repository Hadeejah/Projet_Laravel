<?php
require "../models/ArticleModel.php";
class ArticleController{
    public function getArticle()
    {
        $articleModel=new ArticleModel();
        echo json_encode($articleModel->all());

    }
    public function insertArticle()
    {
        if (isset($_GET['libelle']) && !empty($_GET['libelle']) &&
			isset($_GET['prix']) && !empty($_GET['prix'])) {
            
		}
    }
}
<?php
require "../controllers/ArticleController.php";

class Router{
    public function route($url)
    {
		if ($url === '/articles') {
			$controllers=new ArticleController();
			$controllers->getArticle();
		}else {
			$controllers=new ArticleController();
			$controllers->insertArticle();
			
		}
    }
}
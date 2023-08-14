<?php
require_once "../models/MarqueModel.php";

class MarqueController{
    private $model;

    public function __construct()
    {
       $this-> model = new MarqueModel();
    }

    public function listerMarque()
    {
        $Marque = $this-> model -> getAllMarque();
        require_once "../views/liste.html.php";
    }

    public function addMarque()
    {
        $valeur = $_POST['submit'];
        $this-> model->insererMarque($valeur);
        require_once "../views/liste.html.php";
       /*  require_once "../views/add.html.php"; */
         header('Location:http://localhost:8000/list');
    }
}
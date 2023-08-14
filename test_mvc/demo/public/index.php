
<?php

require_once "../controllers/MarqueController.php";

$MarqueController = new MarqueController();


if ($_SERVER['REQUEST_URI'] === '/list') {
    $MarqueController->listerMarque();
} else if ($_SERVER['REQUEST_URI'] === '/add') {
    $MarqueController->addMarque();
}

/* if (isset($_GET['submit'])) {
   
}
?> */
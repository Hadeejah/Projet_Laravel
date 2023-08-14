<?php
class Router{
  
 function __construct()
 {

     $uri = $_SERVER['REQUEST_URI'];
     echo ($uri);
     // supprimer chaine de caractére 1er et dernier
   /*    $string = 'Vive le PHP';  */
    $uri = trim($uri,"/");
   /*   echo $string;  */
     $link = explode('/', $uri);
     echo $link[0];
     // pour savoir si le fichier existe
    /*  $filename = '/toto';
     if (file_exists($filename)) {
         echo "Le fichier $filename existe.";
     } else {
         echo "Le fichier $filename n'existe pas.";
     } */

  //$ctr c'est le chemin bi conntrolleur nek
     $ctrl='../Controller/'.ucfirst(strtolower($link[0])).'Controller.php';
     if (file_exists($ctrl)) {
         echo "ok";
     } else {
         echo "ko";
     } 

     if (isset($link[0]) && $link[0]) {
      echo"controller existe";
     }else {
        $link[0]='home';
     }
     // est ce que action existe
     if (isset($link[1]) && $link[1]) {
         // creer le controller
         require_once "../$ctrl";
         $controller= ucfirst(strtolower($link[0]))."Controller" ;
     }
        $Totoctrl=new TotoController();

       if (method_exists($dija,$link[1])) {
           echo"methode existe";
       }else {
         echo "methode n'existe pas";
       }
 }
}




/* class Router
{
    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $link = explode('/', $uri);

        // Vérifier si un contrôleur est spécifié
        if (isset($link[1]) && $link[1]) {
            $controllerName = ucfirst(strtolower($link[1])) . "Controller";
            $controllerFile = "../Controller/{$controllerName}.php";

            // Vérifier si le fichier du contrôleur existe
            if (file_exists($controllerFile)) {
                require_once $controllerFile;

                // Vérifier si la classe du contrôleur existe
                if (class_exists($controllerName)) {
                    $controller = new $controllerName();

                    // Vérifier si une action est spécifiée
                    if (isset($link[2]) && $link[2]) {
                        $actionName = $link[2];

                        // Vérifier si la méthode correspondant à l'action existe dans le contrôleur
                        if (method_exists($controller, $actionName)) {
                            // Appeler l'action du contrôleur
                            $controller->$actionName();
                        } else {
                            echo "L'action {$actionName} n'existe pas dans le contrôleur {$controllerName}.";
                        }
                    } else {
                        // Si aucune action n'est spécifiée, appeler l'action par défaut "index"
                        $controller->index();
                    }
                } else {
                    echo "Le contrôleur {$controllerName} n'existe pas.";
                }
            } else {
                echo "Le fichier du contrôleur {$controllerName}.php n'existe pas.";
            }
        } else {
            echo "Aucun contrôleur spécifié.";
        }
    }
} */
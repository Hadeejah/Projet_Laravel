<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php 
/* include_once('Modele/ClassCarre.php'); 
$Carre = new Carre(); */
include_once('Index.php');

echo('le perimetre est: '.$Carre->calculPerimetre().'<br>');

echo('la surface est: '.$Carre->calculSurface().'<br>');

echo('la diagonale est: '.$Carre->calculDiagonale().'<br>');
?>
  
</body>
</html>
<?php
/* print_r($_POST); */

if (isset($_POST['btn_valide'])) {
    if (empty($_POST['Date']) && isset($_POST['Date'])) {
        echo("le champ est vide");
    }
    else {
        
    }
}
/* isset(): verifie si une variable existe ou pas*/
/* empty():verifie si la variable est vide ou pas */
/*  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label for="">Entrer une date</label>
        <input type="text" name="Date">
        <button type="submit" name="btn_valide">valider</button>
    </form>
</body>
</html>
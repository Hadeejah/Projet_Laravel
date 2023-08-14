<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="contain">
    <form method="post" action="http://localhost:8000/add"> 
        <input type="text" name="submit">
        <input type="submit" value="Ajouter" name="btn_aj">
    </form>
 <div class="marque">
        <table style="width: 100%">
            <tr>
             <th>id</th>
            <th>libelle</th>
         </tr>
       <?php if (isset($Marque)) : ?>
      <?php foreach ($Marque as $Marques) : ?>

        <tr>
            <td>
                <?php echo $Marques['id']?>
            </td>
            <td>
                <?php echo $Marques['libelle']?>
            </td>
        </tr>
           <?php endforeach?> 
       </table>
       <?php endif?>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe de incremento</title>
</head>
<body>
    <form action="" method="post">
        <label for="anoatual">ano atual</label>
        <input type="number" name="anoatual">
        <input type="submit">
    </form>
    <?php
        if ($_POST){

        $anoatual =$_POST['anoatual'];
       echo 'o ano anterior é: '.--$anoatual;

       
    } 
    ?>
    <fieldset>sexo
    <input type="text">
    <input type="color">
   

    </fieldset>
</body>
</html>
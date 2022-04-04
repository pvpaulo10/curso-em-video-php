<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swich 2</title>
</head>
<body>
    <div>
        <form action="" method="post">

            dia da semana: <input type="number" name="diasemana" min="2" max="8" required="">
            <!-- a tag required serve para obrigar colocar um valor no input
        e max e min pra determinar de qual valor minimo ate qual valor maximo o input vai aceitar -->
            <input type="submit">




        </form>



    </div>
</body>

<?php

    $d = isset($_POST['diasemana']) ? $_POST['diasemana']: 0;
    switch($d){
        case 2:
        case 3:
        case 4:
        case 5:
            echo 'dia de semana vai ESTUDAR!!! ';
            break;
        case 7:
        case 8:
            echo 'fim de semana vai DESCANSAR!!!';
            break;
        default:
            echo ' ERROR!! ';    
    }

?>

</html>        
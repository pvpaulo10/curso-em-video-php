<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USO DE WHILE EM PHP</title>
</head>
<body>
    <div>
        <?php

            $c = 10; // $c = 10 ou seja $ inicia com o valor 10

            while($c >= 1){     // enquanto $c que começa com 10 for maior ou igual a 1
                echo $c; $c--; // echo(mostre) valor de 10(var $c) sendo diminuido de 1 em 1
              
            }

        ?>
        <br><br>

        <?php
        $d = 1;
        while($d <= 10){
            echo $d; $d++;
        }
        ?>
        <br><br>
        <?php
        $e = 0;
        while($e <= 50){
            echo $e; $e+=5; // forma de incremento de valores acima de ++
        }

        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> USO DE DOWHILE</title>
</head>
<body>
    <div>
        <?php

            $c = 1;
            do{
                echo $c; $c++;

            }
            while($c <= 10);
        ?>
    </div>
    <br><br><br><br>
    <hr>
    <div>
        <form action="" method="post">

            valor: <input type="number" name="valor" id="" min="0" max="100">
            <br>
            <input type="submit" value="FATORIAL">


        </form>
        <!-- calculo de fatorial -->
         <?php

                $valor = isset($_POST['valor']) ? $_POST['valor']:1; 
                echo 'calculando fatorial de '.$valor;
                $calculo = $valor;
                $fat = 1;
                do{
                    $fat = $fat * $calculo;
                    $calculo --;
                }
                while ($valor >= 1);
                    echo 'o fatorial é '.$calculo
        ?>
        <!-- errado  -->
    </div>
    
</body>
</html>
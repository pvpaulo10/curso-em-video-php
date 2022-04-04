<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USO DO LAÇO FOR</title>
</head>
<h1>uso de laço FOR</h1>
<body>
    <?php

        for($i = 1; $i <= 10; $i ++ ){

        
        echo ' '.$i;
        }
        echo '<br>';
        for ($i = 10; $i >=1; $i --){
            echo ' '.$i;
        }
        echo '<br>';
        for($i= 0; $i <= 50; $i+= 5 ){
            echo ' '.$i;
        echo '<br>';
        }
        for($i = 100; $i >= 10; $i-= 5){ //variavel $i recebe 100; enquanto $i for maior ou igual 10; $i sera diminuido de 5 em 5
            echo ' '.$i;
        }

    ?>
    <h1>tabuada em FOR</h1>
        <form action="" method="post">

            <select name="num" >
                <?php
                for($n = 1; $n <= 10; $n ++){
                    echo "<option> $n </option>";
                }
                ?>
            </select>
            <input type="submit" value="tabuada">
                <?php
                    $n = isset($_POST['num']) ? $_POST['num']: 1; 
                    for( $c=1; $c <= 10; $c++){ 
                        $resultado = $c * $n;                       
                    echo $n.' X '.$c.'='. $resultado.'<br>';
                    }
                    // isset significa ''se foi configurado'' "se foi passado valor no parametro['']"
                     //  a variavel $n recebe o valor do parametro ['num']
                     //laço for, a variavel $c(contador) recebe 1; emquanto a var $c for menor ou igual 10; vai ser incrementado de 1 em 1
                     //a variavel $resultado recebe o valor da var $c X o valor da variavel $n que recebe um valor enviado de um parametro
                ?>

        </form>
</body>
</html>
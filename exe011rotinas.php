<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTINA DE FUNÇÃO</title>
</head>
<body>
    <?php

    function soma ($a, $b){
        $s = $a + $b;
        echo ' A soma vale '.$s;
    }
        soma(3, 4);
        soma(8, 2);
        $x = 9;
        $y = 17;
        soma ($x, $y);
    ?>
    <br><br>
   <?php

   function somaa ($a, $b){
       $s = $a + $b;
       return $s; // ou posso colocar return $a + $b; e nao precisar do uso da variavel $s
   }
   $x = 3;
   $y = 5;
    $r = somaa ($x, $y);
    echo 'A soma entre '.$x.' e '.$y.' é: '.$r;
   ?>
<br><br>
   <?php

        function somatorio(){ //somatorio esta vazio pois vai receber os valores do parametro em baixo
            $parametro = func_get_args(); // func get args () recebe o valores passado na variavel $parametro(var $parametro é um vetor)
            $total = func_num_args(); // func get args () recebe o total de parametros passado no caso 3 parametros que é o (3,5,2)
                $somatorio = 0; // a var $somatorio recebe o valor de 0
            for($i=0; $i < $total; $i++){ // uso do  laço for ou seja a var $i recebe 0; eqnt $i for menor que a var $total; $i vai ser incrementado 1 em 1
                $somatorio += $parametro[$i];// a var $somatorio = $somatorio + o valor passado pela var $parametro que recebe o incremento da $i que tem o valor de 0
            }
            return $somatorio; // $somatorio esta retornando o valor

        }
    
        $resultado = somatorio(3,5,2); // $resultado recebe o a fuction somatorio que ta recebendo 3 parametro(3,5,2)
        echo ' A SOMA DOS VALORES É '.$resultado;

   ?>

</body>
</html

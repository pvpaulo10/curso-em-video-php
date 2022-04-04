<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTINAS EM PHP EXE 2</title>
</head>
<body>
    <?php
        // passando valores por referencias:
        function teste(&$x){ // a função teste recebe o valor da var $x o e comercial(&) serve para fazer a var $a ser incluida seu valor (3) + o valor da variavel $x que recebe +2
           $x +=2; // a var $x recebe +2
           echo'<p> O valor de X é</p> '.$x; 
        }

        $a = 3; // a var $a recebe o valor 3
        teste ($a); // a function soma esta recebendo agora a referencia do valor de $a que é(3) e como la em cima tem o & comercial...
        echo' <p> O valor de A é: </p>'.$a; //...entao a a function soma ta recebendo o valor 3 da var $a e + 2 que ta sendo incrementado na var $x ficando valor total 5

    ?>



<?php
    include"exe013rotinas2include.php";// include funciona igual ahref do html
        echo ' <h1> <i> TESTANDO NOVAS FUNÇÕES </i> </h1>';// alem do include (incluido) tem o require(requerido)
            ola();// a diferença é que o require obriga ter a referencia do arqvuivo se nao ele nao funciona nada
            mostravalor(5);// o include ele funciona ate precisar dele e sinalizar q falta o ahref do arquivo php
        echo' <h3> finalizando teste </h3>';// include_once( incluido apenas uma vez) require_once(requerido apenas uma vez)
                                            //se nao usar o 'once' ele vai ser duplicado 'once carrega so uma vez'
?>
</body>
</html>
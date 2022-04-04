<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO DE SWITCH</title>
</head>
<body>
    <div>

        <form action="" method="post">

                <label for="numero">numero: </label>
                <input type="number" name="numero">

            <fieldset><legend>OPERAÇÃO</legend>

                <label for="dobro">DOBRO</label>
                <input type="radio" name="operacao" id="dobro" value="1" checked>

                <label for="cubo">CUBO</label>
                <input type="radio" name="operacao" value="2" id="cubo">

                <label for="raiz">RAIZ</label>
                <input type="radio" name="operacao" value="3" id="raiz">


                 <br><br>

                <input type="submit" value="calcular">
            </fieldset>
        </form>
    </div>
    
</body>
<?php
    $n = isset($_POST['numero']) ? $_POST['numero'] : 0;
    $o = isset($_POST['operacao']) ? $_POST['operacao'] : 1;

    switch ($o){
        case '1':
            $r = $n *2;
            break;
        case '2':
            $r = $n * $n * $n;
            echo'rodolfo';
            break;
        case '3': 
            $r = sqrt($n);
            break;
            


}
    echo ' O resultado obtido da opção escolhida é: '.number_format ($r, 2);




?>
</html>
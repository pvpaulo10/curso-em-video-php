<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABUADA EM DO WHILE</title>
</head>
<body>
    <form action="" method="post">

        <h1> TABUADA 1 A 10 </h1>

            <br>

            NÚMERO:
            <select name="calc">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>


            </select>
            <input type="submit" value="tabuada">


    </form>
 <?php
  $calc = isset($_POST['calc']) ? $_POST['calc']: 0;
     
    $calculo = $calc;
    do{
        echo $calc * $calc;
        $calc ++;
    } while ($calc <=10);
    echo 'a tabuada de '.$calculo;
    //errado





 ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE DE CONDICIONAIS</title>
</head>
<body>
    
        <h1>MÉDIA ARITIMÉTICA</h1>
    <form action="" method="post">

    <label for="nota1">1º NOTA</label>
    <input type="number" name="nota1">

    <br><br>

    <label for="nota2">2º NOTA</label>
    <input type="number" name="nota2">

    <br><br>

    <label for="nota3">3º NOTA</label>
    <input type="number" name="nota3">

    <br><br>
     
    <input type="submit" value="calcular">
</form>

<?php

if($_POST)
    
if (!empty ($_POST['nota1']) && !empty ($_POST['nota2']) && !empty ($_POST['nota3']) ){ 
    //sua utilidade é poder preencher outro formulario sem a precisar preencher esse ou se preencher, todos os campos devem estar preenchidos


    $nota1 =$_POST['nota1'];
    $nota2 =$_POST['nota2'];
    $nota3 =$_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) /3;

    if( $media <=4){
        echo'REPROVADO'; 
    }
    elseif ($media <=7){
        echo'RECUPERAÇÂO';

    }
    else{
        echo 'APROVADO';
    }
}
?>

<br><br>


    <h1>CALCULO DE IDADE</h1>
    <form action="" method="post">

    <label for="anoatual">ANO ATUAL</label>
    <input type="number" name="anoatual">

    <br><br>

    <label for="anonasc">ANO DE NASCIMENTO</label>
     <input type="number" name="anonasc">
    <input type="submit" value="calcular">
</form>

    
</body>
<?php




if (!empty ($_POST['anoatual']) && !empty ($_POST['anonasc'])){ 
$anoatual =$_POST['anoatual'];
$anonasc =$_POST['anonasc'];
$idade = $anoatual - $anonasc;
echo'SUA IDADE É: '.$idade.' anos';

}

?>



</html>
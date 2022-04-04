<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercio 1 php curso em video OPERADORES</title>
        <h1>OPERADORES</h1>
</head>
<body>
    <form action="" method="post"> 
        <label for="preco">valor do produto</label>
        <input type="number" name="preco">
        <input type="submit">

    </form>
    
    <div>
        

        
        <?php
        if($_POST){
            
        $preco =$_POST['preco'];

        echo ' o preço do produto é: '.$preco.'<br>';
        $precoaumento = $preco + $preco *10/100;
        echo 'o valor do produto com 10% de acrescimo é R$: '.number_format ($precoaumento, 2).'<br>';
        $precodesc = $preco - $preco*10/100;
        echo' o valor do produto com 10% de desconto é R$: '.number_format($precodesc, 2);

        }
        ?>
        
    </div>

</body>
</html>
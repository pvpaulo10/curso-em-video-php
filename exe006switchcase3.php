<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 3 de switch</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
    ESTADO: <select name="uf" id="">
                <option value="SÃO PAULO">SP</option>
                <option value="RIO DE JANEIRO">RJ</option>
                <option value="MINAS GERAIS">MG</option>
                <option value="ALAGOAS">AL</option>
                <option value="5">SC</option>

            </select>
                <input type="submit">



        </form>
   
</body>
    <?php

       $estado = isset($_POST['uf']) ? $_POST['uf'] : 0;

            switch($estado){
                case 'SÃO PAULO':
                    echo 'você mora no estado de '.$estado.' então você é PAULISTA.';
                break;
                case 'RIO DE JANEIRO':
                    echo 'você mora no estado de '.$estado.' então você é CARIOCA.';
                break; 
                case 'MINAS GERAIS';
                    echo 'você mora no estado de '.$estado.' então você é MINEIRO.';
                break;    
                case'ALAGOAS':
                    echo 'você mora no estado de '.$estado.' então você é ALAGOANO.';
                break;
                case 'SANTA CATARINA':
                    echo 'você mora no estado de '.$estado.' então você é CATARINENSE.';

            }
         

    


    ?>
       </fieldset>
   
</body>


</html>
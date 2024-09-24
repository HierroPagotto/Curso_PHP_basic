<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
       $v = array(3,5,8,2);
       $v[] = 7;
       print_r($v);
    /* array mostra os numeros colocados */

       $c = range(5,20,5);
       print_r($c);
    /* range= (começo, final, pular quantidade de numeros)  */

    $f = range (5,20,5);
    foreach($f as $valor){
        echo"$valor";
    }
    ?>
    </pre>
</body>
</html> 
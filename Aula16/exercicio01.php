<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prod = "leite";
        $preco = 4.5;
        echo "O $prod custa R$ ". number_format($preco,2); /* Jeito que fazia antes, é mais demorado. */
        echo "<br/>";
        printf ("O %s custa R$ %.2f", $prod, $preco);
        echo "<br/>";
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 12;
        print_r($v);/*muito utilizado para periodo de testes */
        echo "<br/>";
        $v2 = array (5,4,3,2,1);
        print_r($v2);/* pode ser substituido por (var_dump($v2) ou (var_export($v2)) */

    ?>
</body>
</html> 

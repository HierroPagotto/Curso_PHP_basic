<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preco do produto é R$ ". number_format($preco, 2, ",");
        $preco += $preco*10/100;
        echo "<br/>E o novo preco com 10% de aumento é R$". number_format($preco, 2, ",");
        $preco -= $preco*10/100;
        echo "<br/>E o novo preco com 10% de desconto é R$". number_format($preco, 2, ",");

    ?>
</body>
</html>
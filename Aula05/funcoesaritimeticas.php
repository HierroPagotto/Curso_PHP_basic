<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes Aritimeticas em PHP</title>
    <style>
        h2{
            font: 15pt arial;
            color: blueviolet;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2); //abs serve para valor absoluto
        echo ",<br/>O valor de $v1<sup>$v2</sup> é" .pow($v1, $v2);//pow serve para potenciação
        echo "<br/> A Raiz de $v1 é ". sqrt($v1);//serve para fazer raiz quadrada
        echo "<br/> O valor de $v2 arredondado é ". round($v2);//serve para arredondar numeros (pode ser usado também (ceil e floor))
        echo "<br/> A parte inteira de $v2 é ". intval($v2);
        echo "<br/> O valor de $v1 em moeda é R$ ". number_format($v1,2,",");
    ?>
</body>
</html>
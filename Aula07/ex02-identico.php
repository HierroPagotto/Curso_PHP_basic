<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)? "Sim":"Não";
        echo "As variaveis A e B sao iguais? $r";// elas são iguais mas não são identicas (==) ficaria certo
    ?>
</body>
</html>
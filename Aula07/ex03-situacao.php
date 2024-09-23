<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    echo "A média entre $nota1 e $nota2 é $media";
    $sit = ($media<6)? "REPROVADO":"APROVADO";
    echo "<br/>A situação do aluno é $sit.";
    ?>
</body>
</html>
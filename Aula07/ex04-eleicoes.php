<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2024 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 and/*ou &&*/ $idade<65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
        echo "<br/>Seu voto é $tipo";
    ?>
</body>
</html>
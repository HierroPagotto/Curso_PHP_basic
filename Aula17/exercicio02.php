<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = str_repeat("Hierro", 5);
        print("$nome");
        /* serve para repetir a string */

        $frase = "Gosto de estudar Matematica";
        $novafrase = str_replace("Matematica","PHP", $frase );
        echo "$novafrase";
        /* substitiu oque voce quer na frase */
        /* para não ter problema com maiusculo e minusculo, coloque
        str_ireplace (adicionar o i na frente do replace) ele ignora essa formatação */
    ?>
</body>
</html> 
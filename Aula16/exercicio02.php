<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
        $r = wordwrap($t,5, "<br/>/n", true);/* ($t) para selecionar o texto, 
        (5) numero de caracteres até a quebra, 
        ("<br/>") para quebrar linha no codigo, 
        ("<br/>/n") para quebrar linha na tela, 
        (true)quebra a linha no numero de vezes que voce mandou mesmo sem terminar a palavra, 
        (false) espera a palavra terminar */
        echo "$r";

    ?>
</body>
</html> 

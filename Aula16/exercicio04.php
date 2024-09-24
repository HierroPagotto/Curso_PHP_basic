<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "Eu vou estudar php";
        $cont = str_word_count($frase, 0); /* conta a quantidade de palavras, 
        (0) serve para contar as palavras, 
        (1) cria um vetor e continua contando as palavras, 
        (2) cria um vetor e faz a contagem de acordo onde a palavra começa */
        print($cont);

        $site = "curso em video";
        $vetor = explode("",$site);/* Versão mais nova para fazer a contagem de palavras */
        print_r($vetor);

        $nome = "Maria";
        $vetor = str_split($nome);/* Vai fazer a contagem por letra */
        print_r($vetor);

        
    ?>
</body>
</html> 
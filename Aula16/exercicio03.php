<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $txt = "Curso em video";
        $tamanho = strlen($txt);
        echo "$tamanho";
        /* (strlen) ela calcula o comprimento de uma string 
        (fez a contagem das letras) contando o espado entre as palavras */
        echo "<br/>";
    
        $nome = "   Hierro Reino Pagotto   ";
        echo(strlen($nome));
        $novo = trim($nome);/* Elimina os espaços antes e depois do conteudo escrito */
        echo "<br/>$nome";
        echo (strlen($novo));
        
        $novo1 = ltrim($nome);/* Elimina apenas os espaços antes do conteudo escrito */
        echo "<br/>$novo1";
        echo (strlen($novo1));
        
        $novo2 = rtrim($nome);/* Elimina apenas os espaços depois do conteudo escrito */
        echo "<br/>$novo2";
        echo (strlen($novo2));

    ?>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
<<<<<<< HEAD
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "A string foi encontrada na posição $pos";
        /* Localiza a posição da string pedida, mas tem q pedir exatamento igual esta escrito */

        $frase1 = "Estou aprendendo PHP";
        $pos1 = stripos($frase1, "php");
        echo "<br/>A string foi encontrada na posição $pos1";
        /* localiza a posição da string pedida, não precisa pedir escrito 100% igual */

        $fra =  "Estou aprendendo PHP no curso em Video de PHP";
        $cont = substr_count($fra, "PHP");
        print("<br/>PHP encontrado $cont vezes.");
        /* conta quantas vezes a string foi encontrada */

        $site = "Curso em video";
        $sub = substr($site,0,5);
        echo "<br/>$sub";
        /* vai receber uma sub string (começo, fim) */

        
=======
        $nome = str_repeat("Hierro", 5);
        print("$nome");
        /* serve para repetir a string */

        $frase = "Gosto de estudar Matematica";
        $novafrase = str_replace("Matematica","PHP", $frase );
        echo "$novafrase";
        /* substitiu oque voce quer na frase */
        /* para não ter problema com maiusculo e minusculo, coloque
        str_ireplace (adicionar o i na frente do replace) ele ignora essa formatação */
>>>>>>> 6d04dfce3ca01a420ce39361663b0c3de6d93312
    ?>
</body>
</html> 
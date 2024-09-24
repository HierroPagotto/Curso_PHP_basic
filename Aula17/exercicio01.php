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
     $nome = "Hierro Pagotto";
     $nome1 = strtolower($nome);/* Deixa tudo em minusculo */
     echo "Seu nome é $nome1 ";

     $nome = "Hierro Pagotto";
     $nome1 = strtoupper($nome);/* Deixa tudo em maiusculo */
     echo "<br/>Seu nome é $nome1 ";

     echo "<br/>";

     $n = "hierro pagotto";
     $n2 = ucfirst($n);/* Deixa a primeira letra em maiusculo */
     echo "$n2";

     $no = "hieRro pAgoTto";
     $no2 = ucfirst(strtolower($no));/* juntei as duas funcoes para corrigir o nome */
     echo "<br/>$no2";

     $nom = "hierro pagotto";
     $nom2 = ucwords($nom);/* altera a primeira letra de toda paravra para maiusculo */
     echo "<br/>$nom2";

     $rev = "hierro pagotto";
     echo "<br/>";
     print(strrev($rev)); /* inverte o texto */

     
=======
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

        
>>>>>>> 6d04dfce3ca01a420ce39361663b0c3de6d93312
    ?>
</body>
</html> 
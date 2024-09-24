<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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

     
    ?>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $vetor[0] = "curso";
      $vetor[1] = "em";
      $vetor[2] = "video";
      $texto = join("#", $vetor);
      print($texto);
      /* join = junta os vetores "#" é o que vai ficar no meio das palvras 
      " "se colocar um espaço ele da um espeço 
      implode faz a mesma coisa que o join*/

      $letra = chr(67);//mostra o código da tecla apertada
      echo "<br/>A letra de código 67 é $letra.";

      $letra1 = "C";//mostra o código da tecla apertada
      $cod = ord($letra);
      print "<br/>O código da letra C é $cod.";
    ?>
</body>
</html> 
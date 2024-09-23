<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $v = isset($_GET["val"])?$_GET["val"]:1;
       echo"<h1>Calculando o fatorial de $v</h1>";
       $c = $v;
       $fat = 1;
       do{
            $fat = $fat * $c;
            $c--;
       }while($c>=1);
       echo "<h2>$v ! = $fat</h2>"
    ?>
    <a href="exercicio02.html">Voltar</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            background-color: blue;
            color: white;
        }

        b{
            color: red;
    
        }
    </style>
</head>
<body>
    <?php
       $v = isset($_GET["tabuada"])?$_GET["tabuada"]:1;
       echo "Mostrando a tabuada de $v:";
       for ($c = 1; $c <= 10; $c++) {
        $tab = $v * $c;
        echo "$v x $c = $tab <br/>";
      }

    ?>
    <br/><a href="desafio05.html">Voltar</a>
</body>
</html>
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
        $i = isset($_GET["i"])?$_GET["i"]:0;
        $f = isset($_GET["f"])?$_GET["f"]:0;
        $a = isset($_GET["a"])?$_GET["a"]:0; 
           echo "$i $f $a";
    ?>
    <br/><a href="desafio04.html">Voltar</a>
</body>
</html>
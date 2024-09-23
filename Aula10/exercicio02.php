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
    </style>
</head>
<body>
    <?php
       $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Descanse!";
                break;
            default:
            echo "Dia da semana invalido.";
        }
    ?>
    <br/><a href="exercicio02.html">Voltar</a>
</body>
</html>
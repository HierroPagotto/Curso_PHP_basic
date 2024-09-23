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
       $e = isset($_GET["estado"])?$_GET["estado"]:0;
       switch($e){
        case 15:
        case 20:
        case 23:
            echo "Voce mora na região <b>Sul</b>";
            break;
        case 8:
        case 12:
        case 18:
        case 24:
            echo "Voce mora na região <b>Sudeste</b>";
            break;
        case 7:
        case 9:
        case 11:
        case 27:
            echo "Voce mora na região <b>Centro-Oeste</b>";
            break;
        case 5:
        case 6:
        case 10:
        case 2:
        case 17:
        case 25:
        case 16:
        case 14:
        case 19:
            echo "Voce mora na região <b>Nordeste</b>";
            break;
        case 1:
        case 3:
        case 4:
        case 10:
        case 13:
        case 15:
        case 21:
        case 22:
        case 26:
            echo "Voce mora na região <b>Norte</b>";
            break;
       }


    ?>
    <br/><a href="desafio03.html">Voltar</a>
</body>
</html>
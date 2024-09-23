<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a =isset($_GET["ano"])?$_GET["ano"]:1900;
        $i =date("Y") - $a;
        echo "Voce nasceu em $a e tem $i anos.";
       if ($i < 16) {
            $tipoVoto = "não vota";
       }
       elseif (($i >= 16 && $i < 18) || ($i>65)) {
            $tipoVoto = "Voto é opcional";
        }
        else {
            $tipoVoto = "voto é obrigatório";
        }
     
            
       echo "<br/>Para essa idade o $tipoVoto."
    ?>
</body>
</html>
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
        if($i >=18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<br/>Com essa idade voce $v e tambem $d";
    ?>
</body>
</html>
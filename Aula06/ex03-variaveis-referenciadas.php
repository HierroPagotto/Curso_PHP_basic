<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A variavel B vale $b";
           echo "<br/>";
        $c = 3;
        $d = &$c;
        $d += 5;
        echo $c;
        echo $d;
    ?>
</body>
</html>
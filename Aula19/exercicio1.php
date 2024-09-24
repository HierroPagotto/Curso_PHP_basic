<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        $v = array("A", 1, "M", 2);
        print_r($v);//print_r apenas para analizar o vetor
        var_dump($v);//apenas para analizar o vetor
        echo "O vetor tem " . count($v) . " elementos<br/>";
        //count serve para contar os elementos do vetor
    ?>
    </pre>
</body>
</html>
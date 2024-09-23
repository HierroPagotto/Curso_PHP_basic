<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
        $conta = $_GET["bb"];
        echo "<br/>Voce tem $conta em sua conta e depois de você gastar 1 real voce tem ". --$conta

    ?>
</body>
</html>
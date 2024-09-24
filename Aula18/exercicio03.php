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
        $n = 
        array(array(2,3),//criado um vetor de 2 colunas e 3 linhas
        array(3,4),
        array(9,5));
        $n[2] [0] = $n [1] [1];//subistitui o valor da linha 2 e coluna 0 pelo valor da linha 1 e coluna 1.
        print_r($n);
    ?>
    </pre>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 =isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 =isset($_GET["nota2"])?$_GET["nota2"]:0;
        $m = ($n1+$n2)/2;
        echo "A média entre $n1 e $n2 é igual a $m";
        if ($m >= 7){
            $sit = "Situação do aluno: APROVADO";
        }
        else{
            $sit = "Situação do aluno: REPROVADO";
        }
        echo "<br/>$sit";

    ?>
</body>
</html>
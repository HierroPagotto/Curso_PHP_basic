<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Hierro";
        $idade = 19;
        $midade = 47;
        $pidade = 52;
        $cidade = isset($_GET["idade"])?$_GET["idade"]:0;
        $tidade = $idade+$midade+$pidade;
        $faculdade = $_GET["f"];//esse dado vem da URL do site.
        $didade = $pidade-$idade;
        echo "Meu nome é $nome, tenho $idade anos.";
        echo "<br/>A raiz quadrada da minha idade é ". sqrt($idade);
        echo "<br/>Minha idade somada com a idade dos meus pais da ". $idade+$midade+$pidade;
        echo "<br/>Somando todas as idades da $tidade";
        echo "<br/>Minha idade mais um ano da ". ++$idade;
        echo "<br/>Eu nasci em ". 2025-$idade;
        echo "<br/> $faculdade";
        echo "<br/>Eu sou $didade anos mais novo que meu pai";
        $tipo = ($idade>=$midade)?"sou mais velho" : "sou mais novo";
        echo "<br/> Eu $tipo que minha mãe";
        $voto = ($idade>=18 && $idade<65)? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "<br/> Seu voto é $voto";
        $igual = ($idade == 19)? "sim":"não";
        echo "<br/> Você tem 19 anos? $igual"; //a resposta vai ser não por conta da linha 21.
        echo "<br/>Oque você deseja calcular? <br/>";
        switch($cidade){
            
        }
    ?>
</body>
</html>
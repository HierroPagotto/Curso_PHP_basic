<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $v = array(0=>5, 3=>9, 4=>8, 7=>7);//lista de vetores
        $v[] ="E";//adicionar vetor
        unset($v[0]);//excluir um vetor
        print_r($v);

        $cas = array(
            "nome" => "hierro",
            "idade" => 19,
            "peso" => 70
        );
        $cas["Fuma"] = true;
        foreach($cas as $k => $c) {
            echo "O campo $k possui o conteudo $c <br/>";
        }
        print_r($cas);
    ?>
</body>
</html> 
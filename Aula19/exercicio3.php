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
        $n = array(3,5,15,2);
        print_r($n);

        sort($n);//ordenar os vetores
        print_r($n);

        rsort($n);//inverter a ordem dos vetores
        print_r($n);

        asort($n);//vai ordenar os vetores mas vai mantes os indices
        print_r($n);

        arsort($n);//vai inverter a ordem dos vetores mas vai mantes os indices
        print_r($n);

        $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
        print_r($v);

        ksort($v);//vai ordenar os indices
        print_r($v);

        krsort($v);//vai reverter a ordem dos indices 
        print_r($v);
?>
    </pre>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            background-color: blue;
            color: white;
        }

        b{
            color: red;
    
        }
    </style>
</head>
<body>
    <?php
        //Numero primo, dividido apenas por um e por ele mesmo. 
        $n = isset($_GET["num"])?$_GET["num"]:1;
        echo "Analizando o numero $n...";
        echo " <br/>Valores multiplos: ";
        $mult = 0;
        for($c = 1; $c <=$n; $c++){
            if ($n % $c == 0) {
				$mult++;
				echo "$c ";
			}
		}
        echo "<p>Total de multiplos $mult</p>";
        if($mult <=2){
            echo "Resultado: $n <b>É PRIMO!</b>";
        }
        else{
            echo "Resultado: $n <b>NÃO É PRIMO!</b>";
        }
        
        

    ?>

</body>
</html>
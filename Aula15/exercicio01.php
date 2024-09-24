<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         function teste ($x){
            $x += 2;
            echo "O valor de x é $x";
         }
         $a = 3;
         teste ($a);
         echo "<br/>O valor de A é $a";

         echo "<br/> <br/>";

         function teste1 (&$t){
            $t += 2;
            echo "O valor de T é $t ";
         }
         $b =3;
         teste1($b);
         echo "<br/> O valor de B é $b";
    ?>
</body>
</html> 
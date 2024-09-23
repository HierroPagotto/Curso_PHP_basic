<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $c =0;
        do{
            echo "$c ";
            $c+=2;
        }while($c<=20);
        
        echo "<br/>";
        
        $c =10;
        do{
            echo "$c ";
            $c-=1;
        }while($c>=0);
    ?>
    
</body>
</html>
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
        print_r($v);
        
        $v[] = "O";//adicionar um elemento no final da lista 
        print_r($v);
        
        array_push($v, "H");//adiciona um elemento no final da lista
        print_r($v);
        
        array_pop($v);//remove um elemento ao final da lista
        print_r($v);
      
        array_unshift($v, 5);//adiciona um elemento no da lista
        print_r($v);

        array_shift($v);//Elimina o primeiro elemento da lista
        print_r($v);

?>
    </pre>
</body>
</html>
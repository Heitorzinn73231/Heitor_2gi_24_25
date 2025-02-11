<!DOCTYPE html>
<html lang ="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Estrutura Condicional if </title>~
</head>~

<body>
    <?php
    $a=$_GET['n1'];
    $b=$_GET['n2'];

    if($a>$b){
        echo "<h2> $a é maior que $b </h2>";

    }else{
        echo "<h2> $b é maior que $a </h2>"
    }
    ?>

</body>
</html>
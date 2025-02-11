<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta cahrset="UTF-8">
        <title> PHP - Passar parametro pela URL</title>
</head>

<body>
    <?php
    #Passar paramtros pela URL - Teste de funçoes

    $n1 = $_GET["x"]; //o valor do parametro x é passado para a variavel $n1
    $n2 = $_GET["y"]; //o valor do parametro y e passado para a variavel $n2

    echo "<h2> Os parametros recebidos são: $n1 e $n2 </h2>";
    echo "O valor absoluto de $n1 é " . abs($n1);
    echo "<br> O valor de $n1 <sup>$n2</sup> é " .pow($n1,$n2);
    echo "<br> A raiz quadrada de $n1 é " .sqrt($n1);
    echo "<br> O valor de $n2 arredondado é" .round($n2);
    echo "<br> A parte iteira de $n2 é " .intval($n2);
    echo "<br> O valor de $n1 em valor monetário é" .number_format($n1,2). " € "

    //abrir no browser passado os parametros pela URL
    ?>
</body>
</html>
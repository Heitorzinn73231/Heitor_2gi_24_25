<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta cahrset="UTF-8">
        <title> PHP - Passar parametro pela URL</title>
</head>

<body>
    <?php
    #Passar parametros pela URL

    $n1 = $_GET["a"]; //o valor do parametro a é passado para a variavel $n1
    $n2 = $_GET["b"]; //o valor do parametro b é passado para a variavel $n2
    $media = ($n1 + $n2)/2;

    echo "<h2> Os parametros recebidos pela URL foram $n1 e $n2. </h2>"
    echo "<br/> O valor da média aritmetica entre $n1 e $n2 é igual a $media";

    //abrir no browser com a URL -> https://localhost/www/exemplo5.php?a=2&b

</body>
</html>

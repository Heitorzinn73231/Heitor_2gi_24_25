<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title> AULA 3 - Exemplo 4 </title>
    <style>
        h1{
            background-color:black;
            border-radius: 25px;
            width: 620px;
            color: white;
            text-shadow:red 5px 2px 5px;
            padding:5px;
        }
    </style>
</head>
<body>
    <?php
    $numero =$_GET["n"];
    $op = $_GET["operacao"];

    switch($op){
        case 1:
            $resultado = $numero ** 2;
        break;
        case 2 :
            $resultado = $numero** 3;
        break;
        case 3:
            $resultado = sqrt($numero);
        break;
        //default
        //echo "OPÇÂo INVALIDA"

    
    }
    echo "<h1> O resultado da operaçao é igual a 125 </h1>"
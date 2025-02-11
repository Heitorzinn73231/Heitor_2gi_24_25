<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UFT-8">
        <title> AULA 3 - Exemplo 3 </title>
        <style>
            h1{
                text-shadow: 2px 2px 5px red;
            }
            </style>
            </head>
            <body>
                <?php

                $nota1 = $_GET["t1"];
                $nota2 = $_GET["t2"];

                $media = ($nota1+$nota2)/2;
                echo "<h2> A media do aluno e de $meida valores! </h2>";

                if($media < 8){
                    echo "<h1> REPROVADO!!! </h1>";
                }elseif($media<10){
                    echo "<h1> RECUPERAÇAO!!!</h1>";
                }else{
                    echo "<h1> APROVADO!!! </h1>";
                }
            ?>
            </body>
            </html>
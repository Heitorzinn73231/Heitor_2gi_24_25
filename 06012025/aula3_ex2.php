<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>AULA 3 - Exercício 1</title>
    </head>
            <body>
                <div>
                    <?php

                    $a = $_GET["ano"];
                    echo "Voce nasceu em $a <br>";

                    $idade= date("Y") - $a;
                    echo " A sua idade é de $idade anos! <br>";

                    if ($idade >= 10){
                        echo " Voce ja e maior de idade entao pode votar! <br>";
                    }else{
                        echo "Voce ainda é menor de idade! Nao pode votar! <br>";
                    }

                    ?>
                </div>
                    <hr>
                    <a href="pag012.html"> <button>Voltar</button> </a>
            </body>
</html>
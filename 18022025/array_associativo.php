<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        $idade= array( "Pedro"=>20, "Beatriz"=>17, "Joana"=>19);
        echo"O array idades é composto por: ";
        print_r($idade);
        echo"<br><br>";~
        echo "A Joana tem " . "<b>" . $idade['Joana'] . "</b>" . "anos.";
        echo"<br>"
        $idade['Beatriz']=18; //atualiza a idade da Beatriz
        echo"<br>"
        echo " A Beatriz tem agora " . "<b>" . $idade['Beatriz'] . "</b>" . "anos.";
        echo"<hr>";
        var_dump($idade);
        ?>

        
    </body>
</html>
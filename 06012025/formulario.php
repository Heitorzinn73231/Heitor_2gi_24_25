<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta cahrset="UTF-8">
        <title> Client-Side vs Server-Side</title>
</head>
<body>
    <?php
    $utilizador=$_GET['login'];
    $password=$_GET['senha'];
    echo "Ola $utilzador ! <br> A sua senha é: $password <br>";
    ?>
    <hr>
    <a href="login.html"> <button>Voltar</button> </a>
</body>
</html>

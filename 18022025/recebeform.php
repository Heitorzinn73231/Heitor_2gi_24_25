<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Recebe Dados do Formulário</title>
    <style>
        div {
            border: thick solid chocolate;
            background-color: #AFAAD2;
            box-shadow: 10px 10px 5px #888888;
            width: 200px;
            padding: 20px;
            margin-left: 50px;
        }

        .button {
            background-color: #8B4513;
            box-shadow: 4px 4px 4px #888888;
            border: none;
            color: white;
            font-family: Arial;
            font-weight: bold;
            padding: 10px 10px;
            text-align: center;
            display: inline-block;
            margin: 20px 50px;
            width: 100px;
        }
    </style>
</head>
<body>

<?php
    // recebe os dados do form e guarda-os em variáveis
    $nome = $_POST["n"];
    $telemovel = $_POST["tlm"];
    $email = $_POST["email"];

    // cria o array associativo
    $cliente = array("Nome" => $nome, "Telemóvel" => $telemovel, "Email" => $email);

    echo "<h3>Constituição do Array:</h3>";

    // imprime o array
    print_r($cliente);
?>

<hr>

<div>
    <?php
        echo "<h3>Cliente Registado:</h3>";
        foreach ($cliente as $chave => $valor) {
            echo $chave . ": " . $valor . "<br>";
        }
    ?>
</div>

<a href="form.html"><button class="button">Voltar</button></a>

</body>
</html>
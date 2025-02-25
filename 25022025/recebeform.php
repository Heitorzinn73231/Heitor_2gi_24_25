<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title> Recebe Dados do Formulário </title>
    <style>
        div {
            border: thick solid chocolate;
            background-color: #FAFAD2;
            box-shadow: 10px 10px 5px #888888;
            width: 200px;
            padding: 20px;
            margin-left: 50px;
        }

        .button {
            background-color: #6C7A89;
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
    <div>
        <?php
            // recebe os dados do form e guarda-os em variáveis
            $nome = $_POST["n"];
            $telemovel = $_POST["tlm"];
            $email = $_POST["eml"];
            $curso = $_POST["cur"];

            echo "Nome: $nome <br>";
            echo "Contacto telefónico: $telemovel <br>";
            echo "Email: $email <br>";
            echo "Curso Profissional: $curso <br>";
            echo "Sr(a) $nome inscreveu-se no curso profissional de $curso <br>";
        ?>
    </div>
    <hr>
    <a href="form2.html"><button class="button">Voltar</button></a>
</body>
</html>

Conversar em #6palhaços-sem-sanidade

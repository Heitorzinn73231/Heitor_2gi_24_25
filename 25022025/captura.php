<?php
$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$sexo = $_GET["sexo"];
$aceito = $_GET["contrato"];
$select = $_GET["opcoes"];
$comentario = $_GET["comentario"];

echo $nome."<br>";
echo $telefone."<br>";
echo $email."<br>";
echo $senha."<br>";
echo "Escolheu: ".$sexo."<br>";
echo "Termos de uso: ".$aceito."<br>";
echo $select."<br>";
echo $comentario."<br>";
?>

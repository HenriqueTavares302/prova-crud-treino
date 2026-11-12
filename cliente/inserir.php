<?php
require_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$data_cadastro = $_POST['data_cadastro'];

$sql = "insert into cliente (nome, email, telefone, cidade, data_cadastro) values ('$nome', '$email', '$telefone', '$cidade', '$data_cadastro')";

mysqli_query($conexao, $sql);

header("Location: listar.php");
?>
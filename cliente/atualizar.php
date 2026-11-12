<?php
require_once("../conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$data_cadastro = $_POST['data_cadastro'];


$sql = "update cliente set nome = '$nome', email = '$email', telefone = '$telefone', cidade = '$cidade', data_cadastro = '$data_cadastro' where id = $id";

$result = mysqli_query($conexao, $sql);

if ($result == true) {
    header("Location: listar.php");
    exit;
} else {
    echo "Erro ao atualizar cliente: " . mysqli_error($conexao);
}
?>
<?php
require_once("../conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];
$ativo = 0;
if (isset($_POST['ativo'])) {
    $ativo = 1;
}

$sql = "update funcionario set nome = '$nome', email = '$email', cargo = '$cargo', salario = '$salario', data_admissao = '$data_admissao', ativo = '$ativo' where id = $id";

$result = mysqli_query($conexao, $sql);

if ($result == true) {
    header("Location: listar.php");
    exit;
} else {
    echo "Erro ao atualizar funcionario: " . mysqli_error($conexao);
}
?>
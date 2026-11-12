<?php
require_once("../conexao.php");

$id = $_GET['id'];

$sql = "delete from cliente where id = $id";

mysqli_query($conexao, $sql);

header("Location: listar.php");
?>
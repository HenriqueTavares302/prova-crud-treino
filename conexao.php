<?php 

$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$bd = "treino";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

    if (!$conexao) {
        die ("erro ao conectar: " .mysqli_connect_error());

    }

?>
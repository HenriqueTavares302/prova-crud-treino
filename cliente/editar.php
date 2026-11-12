<?php
require_once("../conexao.php");

$id = $_GET['id'];

$sql = "select * from cliente where id = $id";
$lista = mysqli_query($conexao, $sql);
$cliente = mysqli_fetch_assoc($lista);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPRESA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include("../menu.php");
    ?>
    <div class="container">
        <h1 align="center">EDITAR CLIENTE</h1>
        <hr>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente['nome']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente['email']; ?>">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" step="0.01" class="form-control" id="telefone" name="telefone" value="<?php echo $cliente['telefone']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cliente['cidade']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="data_cadastro" class="form-label">Cadastro:</label>
                <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" value="<?php echo $cliente['data_cadastro']; ?>" required>

            </div>

            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
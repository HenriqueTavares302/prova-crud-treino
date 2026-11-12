<?php
require_once("../conexao.php");

$sql = "select * from cliente order by id";
$lista = mysqli_query($conexao, $sql);
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
        <h1 align="center">CLIENTES</h1>
        <hr>
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Cadastro</th>
                <th>Acoes</th>
            </tr>
            <?php
            while ($linha = mysqli_fetch_assoc($lista)) {
            ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['telefone']; ?></td>
                    <td><?php echo $linha['cidade']; ?></td>
                    <td><?php echo $linha['data_cadastro']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalremover<?php echo $linha['id']; ?>">
                            Remover
                        </button>

                        <div class="modal fade" id="modalremover<?php echo $linha['id']; ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Remover cliente</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja remover o cliente <strong><?php echo $linha['nome']; ?></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="remover.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
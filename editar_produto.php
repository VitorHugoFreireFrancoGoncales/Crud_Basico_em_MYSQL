<?php
include 'conexao.php';
    $id = $_GET['id'];   
?>

<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="editar_produto.css">

    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4><i>Formulário de Cadastro</i></h4>
            <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
                <?php

                $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                ?>

                <div class="form-group">
                    <label>Numero do Produto</label>
                    <input type="number" class="form-control" name=" nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
                </div>

                <div class="form-group">
                    <label><i>Nome do Produto</i></label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                </div>

                <div class="form-group">
                    <label><i>Categoria do Produto</i></label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantidade Produto</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm btn-success">
                    <i class="bi bi-check2-circle">
                        Atualizar
                    </i>
                    </button>
                </div>
            <?php } ?>
            </form>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
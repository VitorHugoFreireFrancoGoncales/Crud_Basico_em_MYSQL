<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/ea7384805a.js" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container" style="margin-top: 40px; width: 500px">
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
<h3>Lista de Categoria</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM `categoria`";
    $busca = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($busca)) {
        
        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nome_categoria'];

        ?>
    <tr>
            <td><?php echo $nomecategoria ?></td>


            <td><a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

            <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>


            </td>
    </tr>

        <?php } ?>

        
</table>

</div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
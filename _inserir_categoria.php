<?php

    include 'conexao.php';
    $categoria = $_POST['categoria'];
    $sql = "INSERT INTO categoria (nome_categoria) values ('$categoria')";
    $inserir = mysqli_query($conexao,$sql); 

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">

<center>
    <h3><i>Adicionado com sucesso</i></h3>
    <div style="margin-top: 10px">
    <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>
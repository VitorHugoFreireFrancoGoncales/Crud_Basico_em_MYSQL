<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<title>Conhecendo A Comlurb</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--CSS / Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="menu.css">
</head>
<body id="layout">

<?php 
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];
?>

<h1><strong> <img src="./imagens/COMLURB.png" style="height: 90px;"> CONHECENDO UM POUCO A COMLURB🧹</strong></h1>
<div class="container" id="logoff">
<h5><a href="index.php">✖</a></h5></div>

<div class="container">
<div class="row">
  <?php
if(($nivel == 1)||($nivel == 2)) {
  ?>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img src="./imagens/gari.jpg" style="width: 180px;"><h5 class="card-title">Conheça a Comlurb</h5>
        <p class="card-text"></p>
        <a href="adicionar_produto.php" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
  </div>

<?php } ?>

  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <i class="bi bi-pencil-square"><h5 class="card-title">Lista de Produtos</h5></i>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-clipboard2-plus"><h5 class="card-title">Adicionar Categoria</h5></i>
        <p class="card-text">Opção para adicionar uma nova categoria.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categotia</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-person-plus-fill"><h5 class="card-title">Adicionar Fornecedor</h5></i>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <i class="bi bi-person-plus-fill"><h5 class="card-title">Cadastrar Usuário</h5></i>
        <p class="card-text">Cadastrar Usuário</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <i class="bi bi-person-plus-fill"><h5 class="card-title">Aprovar Usuários</h5></i>
        <p class="card-text">Aprovar usuários cadastrados</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>

</div>

</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
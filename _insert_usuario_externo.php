<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'Inativo';


$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario,status) values ('$nomeusuario','$mail',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">

<center>
    <h3><i>Usuário adicionado com sucesso, esperando aprovação</i></h3>
    <div style="margin-top: 10px">
    <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>

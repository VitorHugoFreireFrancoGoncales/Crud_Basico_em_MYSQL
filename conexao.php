<?php
    $servername = "localhost";//padrão - server local 
    $database = "curso_estoque";//alterar conforme o nomedo seu banco de dados
    $username = "root";//padrão - root
    $password = "";//senha de conexao do banco de dados.
    // Create connection
    $conexao = mysqli_connect($servername, $username, $password, $database);

?>
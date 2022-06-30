<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<title>Pagina Principal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--CSS / Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <style type="text/css">
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            box-shadow: 10px 10px 29px -8px rgba(194,194,194,1);
            }
        </style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding: 10px">
<center>
<img src="imagem/cadeado.png" width="125px" height="125px">
</center>
    <form action="index1.php" method="post">
        <div class="form-group">

            <label>🐱‍💻E-mail do Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Digite o seu email de usuário" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label>👁‍🗨Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha de usuário" autocomplete="off" required>
        </div>
    
    <div style="text-align: right;">
    <button type="submit" class="btn btn-sm btn-success">Entrar</button>
    </div>
    </form>

</div>
</div>

<div style="margin-top: 10px;">
<center>
    <small>🙄Você não possui cadastro ? Clique <a href="cadastro_usuario_externo.php"> aqui 👈🏻</a></small>
</center>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
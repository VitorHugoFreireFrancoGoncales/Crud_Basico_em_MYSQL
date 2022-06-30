<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

<div class="container" style="margin-top: 40px; width: 500px">
    <div style="text-align: right;">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">
        <i class="bi bi-arrow-left-circle">
            <b>Voltar</b>
        </i>
        </a>
    </div>

    <h4><i>Cadastro de Categoria</i></h4>
    <form action="_inserir_categoria.php" method="post">
        <label><i>Categoria</i></label>
        <div class="form-group">
            <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off">
        </div>

        <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-sm btn-success">
        <i class="bi bi-check-circle-fill">
        <b>Cadastrar</b>
        </i>
        </button>
        </div>
        
    </form>
</div>











<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
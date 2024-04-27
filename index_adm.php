<?php require_once 'usuario-verifica.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/color-modes.js"></script>

</head>
<body>
<!-- Cabecalho pagina -->
<session>
    <header class="d-block p-5 text-bg-primary">
        <div class="container">
            <div class="d-flex ">
                <!-- Titulo página -->
                <div class="col-sm-6">
                    <h3>Sistema Acadêmico - Painel de controle</h3>
                </div>

                <!-- Navbar -->
                <div class="col-sm-4">
                    <ul class="nav me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="alunos/alunos-listar.php" class="nav-link px-3 text-white">Alunos</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                        <li><a href="turmas/turmas-listar.php" class="nav-link px-3 text-white">Turmas</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                        <li><a href="#" class="nav-link px-3 text-white">Disciplinas</a></li>
                    </ul>
                </div>

                <!-- Botao login -->
                <div class="d-grid gap-2 col-1 mx-auto">
                <a href="./usuario-logout.php" type="button" class="btn btn-light">
                        SAIR
                    </a>
                </div>
            </div>
        </div>
    </header>
</session>    
</body>
</html>
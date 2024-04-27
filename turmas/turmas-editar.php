<?php
// Inclui o arquivo que contém a definição da classe Turma
require_once "../classes/Turma.php"; //*******MUNDANÇA DE CAMINHO*****

// Obtém o valor do parâmetro "id" passado na URL via método GET
$id = $_GET['id'];

// Cria um novo objeto da classe Turma passando o valor de $id como parâmetro
$turma = new Turma($id);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/color-modes.js"></script>

    <title>Sistema Acadêmico</title>
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
                            <li><a href="../alunos/alunos-listar.php" class="nav-link px-3 text-white">Alunos</a></li>
                            <!--*******MUNDANÇA DE CAMINHO*****-->
                            <li><a href="./turmas/turmas-listar.php" class="nav-link px-3 text-white">Turmas</a></li>
                            <!--*******MUNDANÇA DE CAMINHO*****-->
                            <li><a href="#" class="nav-link px-3 text-white">Disciplinas</a></li>
                        </ul>
                    </div>

                    <!-- Botao login -->
                    <div class="d-grid gap-2 col-1 mx-auto">
                        <a href="../usuario-logout.php" type="button" class="btn btn-light">
                            SAIR
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </session>
    <div class="container">

        <div class="my-5">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h3>
                        EDITAR REGISTRO
                    </h3>
                </div>
                <div class="col-2 position-absolute end-0">
                    <a class="btn btn-danger" href="turmas-listar.php" role="button">
                        CANCELAR
                    </a>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3"></div>
                <div class="col-6 bg-light p-3">
                    <form action="turmas-editar-gravar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $turma->id ?>">
                        <label for="descTurma" class="form-label">Turma:</label>
                        <input class="form-control" type="text" name="descTurma" value="<?= $turma->descTurma ?>">
                        <br><br>
                        <label for="ano" class="form-label">Ano:</label>
                        <input class="form-control" type="number" name="ano" value="<?= $turma->ano ?>">
                        <br><br>
                        <button type="submit" class="btn btn-primary btn-block">SALVAR</button>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
</body>

</html>
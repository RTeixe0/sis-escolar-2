<?php require_once '../usuario-verifica.php'; ?>

<?php
require_once "../classes/Aluno.php";
$aluno = new Aluno();
$lista = $aluno->listar();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                            <li><a href="./alunos-listar.php" class="nav-link px-3 text-white">Alunos</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                            <li><a href="../turmas/turmas-listar.php" class="nav-link px-3 text-white">Turmas</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
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
                <div class="col-2">
                    <h3>
                        Listar Alunos
                    </h3>
                </div>
                <div class="col-2 position-absolute end-0">
                    <a class="btn btn-primary" href="./alunos-inserir.php" role="button">
                        NOVO ALUNO
                    </a>
                </div>
            </div>

            <table class="table table-striped">
                <tr>
                    <th>Código</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Turma</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($lista as $linha) : ?>
                    <tr>
                        <td><?php echo $linha['id'] ?></td>
                        <td><img src="../img/<?php echo $linha['foto'] ?>" height="60"></td><!--*******MUNDANÇA DE CAMINHO*****-->
                        <td><?php echo $linha['nome'] ?></td>
                        <td><?php echo $linha['email'] ?></td>
                        <td><?php echo $linha['descTurma'] ?></td>
                        <td>
                            <a href="./alunos-editar.php?id=<?= $linha['id'] ?>">
                                <span class="material-symbols-outlined">
                                    edit_square
                                </span>
                            </a><!--*******MUNDANÇA DE CAMINHO*****-->
                            <a href="./alunos-excluir.php?id=<?= $linha['id'] ?>">
                                <span class="material-symbols-outlined text-danger">
                                    delete_forever
                                </span>
                            </a><!--*******MUNDANÇA DE CAMINHO*****-->
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <!-- <a href="./alunos-inserir.php">Novo Aluno</a>*******MUNDANÇA DE CAMINHO***** -->
        </div>
    </div>
</body>

</html>
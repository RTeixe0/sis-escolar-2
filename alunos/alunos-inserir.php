<?php require_once '../usuario-verifica.php'; ?>

<?php
require_once "../classes/Turma.php";
/*******MUNDANÇA DE CAMINHO*****/
$turma = new Turma();
$lista = $turma->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                            <li><a href="./alunos-listar.php" class="nav-link px-3 text-white">Alunos</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                            <li><a href="../turmas/turmas-listar.php" class="nav-link px-3 text-white">Turmas</a></li><!--*******MUNDANÇA DE CAMINHO*****-->
                            <li><a href="#" class="nav-link px-3 text-white">Disciplinas</a></li>
                        </ul>
                    </div>

                    <!-- Botao login -->
                    <div class="d-grid gap-2 col-1 mx-auto">
                        <a type="button" class="btn btn-light">
                            SAIR
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </session>

    <div class="container">

        <div class="my-2">
            <div class="row justify-content-between">
                <div class="col-3">
                    <h3>
                        NOVO ALUNO
                    </h3>
                </div>
                <div class="col-2 position-absolute end-0">
                    <a class="btn btn-primary" href="./alunos-listar.php" role="button">
                        CANCELAR
                    </a>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3"></div>
                <div class="col-6 bg-light p-3">
                    <form enctype="multipart/form-data" action="alunos-gravar.php" method="POST">
                        <div class="mb-3">
                            <label for="txtnome" class="form-label">Nome:</label>
                            <input type="text" name="txtnome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtemail" class="form-label">Email:</label>
                            <input type="text" name="txtemail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtfoto" class="form-label">Foto:</label>
                            <input type="file" name="imgfoto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="selturma" class="form-label">Turma:</label>
                            <select name="selturma" class="form-control">
                                <option value=''>Selecione...</option>
                                <?php
                                foreach ($lista as $linha) :
                                    echo "<option value='{$linha['id']}'> 
                                         {$linha['descTurma']}
                          </option>";
                                endforeach
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">ADICIONAR</button>

                    </form>
                </div>
                <div class="col-3"></div>

            </div>
        </div>

        <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
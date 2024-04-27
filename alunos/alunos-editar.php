x

<?php
// Inclui o arquivo que contém a definição da classe Aluno e Turma
require_once "../classes/Turma.php";
/*******MUNDANÇA DE CAMINHO*****/
$turma = new Turma();
$lista = $turma->listar();

require_once "../classes/Aluno.php";
/*******MUNDANÇA DE CAMINHO*****/

// Obtém o valor do parâmetro "id" passado na URL via método GET
$id = $_GET['id'];

// Cria um novo objeto da classe Turma passando o valor de $id como parâmetro
$aluno = new Aluno($id);
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
                <div class="col-4">
                    <h3>
                        ATUALIZAR REGISTRO
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
                    <form enctype="multipart/form-data" action="alunos-editar-gravar.php" method="POST">
                        <div class="mb-3">

                        </div>
                        <input type="hidden" name="id" value="<?= $aluno->id ?>">
                        <div class="mb-3">
                            <label class="form-label" for="txtnome">Nome:</label>
                            <input class="form-control" type="text" name="txtnome" value="<?= $aluno->nome ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="txtemail">E-mail:</label>
                            <input class="form-control" type="text" name="txtemail" value="<?= $aluno->email ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="selturma">Turma:</label>
                            <select class="form-control" name="selturma">
                                <option value=''>Selecione...</option>
                                <?php
                                foreach ($lista as $linha) :
                                    if ($linha['id'] == $aluno->turma_id) {
                                        echo "<option value='{$linha['id']}' selected> 
                                         {$linha['descTurma']}
                          </option>";
                                    } else {
                                        echo "<option value='{$linha['id']}'> 
                                         {$linha['descTurma']}
                          </option>";
                                    }
                                endforeach
                                ?>
                            </select>
                        </div>
                        <!--input type="file" id="inputFile" accept="image/*" onchange="previewImage(this)"-->
                        <!--img id="preview" src="../img/<?= $aluno->foto ?>" alt="Imagem Padrão"-->

                        <img class="img-thumbnail my-3" id="preview" src="../img/<?= $aluno->foto ?>" height="150"><br>
                        <input class="form-control btn btn-info" type="file" id="inputFile" name="imgFoto" value="<?= $aluno->foto ?>" onchange="previewImage(this)">
                        <br><br>
                        <input class="form-control btn btn-success" type="submit" value="Gravar">
                    </form>
                </div>
                <div class="col-3"></div>

            </div>
        </div>

        <script>
            function previewImage(input) {
                var preview = document.getElementById('preview');
                var file = input.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = '#';
                    preview.style.display = 'none';
                }
            }
        </script>


</body>

</html>
<?php
try{

    $nomeCompleto = $_POST["nome"];

    $usuario = $_POST["usuario"];

    $senha = hash("sha256", $_POST["senha"]);

    $now = new DateTime();
    $date = $now->format('d-m-y');

    $sql = "INSERT INTO tb_usuarios (nomeCompleto, usuario, senha, datacad)
            VALUES ('{$nomeCompleto}','{$usuario}','{$senha}','{$date}')";

    include_once "classes/conexao.php";
    $conexao->exec($sql);
    echo "<h3>Registro gravado com sucesso!</h3>";
    echo "<a href='index.html'>Fazer login</a>";

}

catch (Exception $erro) {

    echo $erro->getMessage();
    echo "Ocorreu um erro.Por favor, tente novamente mais tarde.";

}

?>
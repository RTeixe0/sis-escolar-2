<?php
// Inclui o arquivo que contém a definição da classe Aluno
require_once "../classes/Aluno.php";/*******MUNDANÇA DE CAMINHO*****/

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto Aluno
$aluno = new Aluno($id);

// Chama o método "excluir" do objeto Aluno
$aluno->excluir();

// Redireciona o usuário para a página "aluno-listar.php"
header('Location: alunos-listar.php');
?>
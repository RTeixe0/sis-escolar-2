<?php
$usuario = $_POST['usuario'];
$senhaLimpa = $_POST['senha'];
$senha = hash("sha256", $senhaLimpa);

$sql = "SELECT * FROM tb_usuarios
        WHERE usuario = :user
        AND senha = :passwd ";


include "classes/conexao.php";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':user', $usuario);
$resultado->bindParam(':passwd', $senha);
$resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];
$permissao = $linha['permisao'];


if ($permissao == 'adm'){
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		header('Location: usuario-erro.php');
	} 
	else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: index_adm.php');
	}
} else {
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		header('Location: usuario-erro.php');
	} 
	else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: index_usu.php');
	}
}

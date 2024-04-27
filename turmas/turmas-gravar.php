<?php
//Inclui o arquivo que contem a definição da clasee Turma
require_once "../classes/Turma.php";//*******MUNDANÇA DE CAMINHO*****

//Cria um novo objeto Turma
$turma = new Turma();

/** Define as propriedades descTurma e ano no objeto Turma
 * com os valores enc=viados pelo formulário */
$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

/**Chama o método inserir() no objeto Turma para inserir
 * os dados na nova turma no banco dados */
$turma->inseir();
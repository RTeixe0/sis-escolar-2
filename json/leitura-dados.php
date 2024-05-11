<?php
$url = 'dados.json';
// Define a URL do arquivo JSON

$json = file_get_contents($url);
// Obtem o conteudo do arquivo JSON como uam string

$data = json_decode($json, true);
//Decodifica a string JSON em um array associativo


foreach ($data as $aluno) {
    echo "<h4> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h4>";
    echo "Nome: {$aluno['nome']} <br>";
    echo "Turma: {$aluno['turma']} <br>";
    echo "<h4>Disciplinas:</h4>";
        foreach ($aluno['disciplinas'] as $disciplina) {
            echo "{$disciplina['nome']} - ";
            echo "{$disciplina['professor']} <br>";
        }
}
?>
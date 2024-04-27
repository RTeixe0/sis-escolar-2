<?php
class Turma
{
    public $id;
    public $descTurma;
    public $ano;

    // define um método construtor na classe e recebe um parâmetro opcional $id
    public function __construct($id = false)
	{
        // verifica se a variável $id foi definida
		if ($id){
            // atribui o valor de $id à propriedade $id do objeto
            $this->id = $id;                
            // chama o método carregar() para carregar as informações da turma correspondente ao id
            $this->carregar();
        }
	}

    public function inseir()
    {
        // echo "Turma: ".$this->descTurma."<br>";
        // echo "Ano: ".$this->ano."<br><br>";
        // echo "Registro gravado com sucesso! #sqn";

        //Define a string SQL de inserção de dados na tabela "tb_turmas"
        $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
                '" . $this->descTurma . "',
                '" . $this->ano . "'
            )";

        //Cria uma nova conexão PDO com o banco de daos "sis-escolar"
        include "conexao.php";/*******MUNDANÇA DE CAMINHO*****/

        //Executa a string SQL na conexão, inserindo os dados na tabela "tb_turmas"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
        //Essa linha retornar para a lista depois de 5 segundos
        header("refresh:5; URL= turmas-listar.php");
    }
    public function listar()
    {
        //Define a string SQL para selecionar os registros de tabela
        $sql = "SELECT * FROM tb_turmas";

        //Cria uma nova conexão PDO com o banco de daos "sis-escolar"
        include "conexao.php";/*******MUNDANÇA DE CAMINHO*****/

        //Executa a string SQL na conexão, retornando um objeto de resultado
        $resultado = $conexao->query($sql);

        //Extrai todos os registros do objeto e coloca-os em um array
        $lista = $resultado->fetchAll();

        //Retorna o array contendo todos os registros da tabela "tb_aluno"
        return $lista;
        
    }
    public function excluir()
	{
        // Define a string de consulta SQL para deletar um registro
        // da tabela "tb_turmas" com base no seu ID
        $sql = "DELETE FROM tb_turmas WHERE id=".$this->id;

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar" localizado
        // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
        include "conexao.php";/*******MUNDANÇA DE CAMINHO*****/

        // Executa a instrução SQL de exclusão utilizando o método
        // "exec" do objeto de conexão PDO criado acima
        $conexao->exec($sql);
	}

    public function carregar()
    {
        // Query SQL para buscar uma turma no banco de dados pelo id
        $sql = "SELECT * FROM tb_turmas WHERE id=" . $this->id;
        include "conexao.php";/*******MUNDANÇA DE CAMINHO*****/

        // Execução da query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos da turma recuperados do banco às propriedades do objeto
        $this->descTurma = $linha['descTurma'];
        $this->ano = $linha['ano'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_turmas SET 
                    descTurma = '$this->descTurma' ,
                    ano = '$this->ano'                   
                WHERE id = $this->id ";

        include "conexao.php";/*******MUNDANÇA DE CAMINHO*****/
        $conexao->exec($sql);
    }
}

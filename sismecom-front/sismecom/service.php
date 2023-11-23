<?php

class CadastroService {

    private $conexao;
    private $cadastroModel;
    

    public function __construct(Conexao $conexao, CadastroModel $cadastroModel) {
        $this->conexao = $conexao->conectar();
        $this->cadastroModel = $cadastroModel;
    }

    public function cadastrarRecepcionista() {
        $query = 'insert into recepcionista (nome, data_nascimento, genero, cpf, endereco, telefone, email, num_matricula, senha) values (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_Param($this->cadastroModel->nome, $this->cadastroModel->data_nascimento, $this->cadastroModel->genero, $this->cadastroModel->cpf, $this->cadastroModel->endereco, $this->cadastroModel->telefone, $this->cadastroModel->email, $this->cadastroModel->num_matricula, $this->cadastroModel->senha);
        $stmt->execute();

        $erro = '';

        if(!$stmt->execute())
		{
			$erro = $stmt->error;
            throw new Exception ($erro);
		}
    }

    public function cadastrarMedico() {
        $query = 'insert into medico (especialidade, cod_crm, nome, data_nascimento, genero, cpf, endereco, telefone, email, num_matricula, senha) values (:especialidade, :cod_crm, :nome, :data_nascimento, :genero, :cpf, :endereco, :telefone, :email, :num_matricula, :senha)';
        $stmt = $this->conexao->prepare($query);
        $this->bindValues($stmt);
        $stmt->execute();
    }

    public function cadastrarLaboratorio() {
        $query = 'insert into laboratorio (nome, cnpj, endereco, telefone, email, id_laboratorio, senha) values (:nome, :cnpj, :endereco, :telefone, :email, :num_matricula, :senha)';
        $stmt = $this->conexao->prepare($query);
        $this->bindValues($stmt);
        $stmt->execute();
    }

    // Método auxiliar para vincular valores aos parâmetros da declaração preparada
    private function bindValues($stmt) {
        foreach ($this->cadastroModel as $atributo => $valor) {
            $stmt->bindValue(':' . $atributo, $valor);
        }
    }
}

?>

<?php

class CadastroModel {
    public $id;
    public $nome;
    public $data_nascimento;
    public $genero;
    public $cpf;
    public $endereco;
    public $telefone;
    public $email;
    public $num_matricula;
    public $senha;
    public $especialidade;

    // Métodos mágicos para acesso aos atributos
    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }

}
?>

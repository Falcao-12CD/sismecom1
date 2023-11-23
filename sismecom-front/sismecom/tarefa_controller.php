<?php

require "conexao.php";
require "model.php";
require "service.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    echo 'inserir';
    // Criando objeto CadastroModel
    $cadastroModel = new CadastroModel();

    // Preenchendo os atributos do objeto com os dados do formulário
    $cadastroModel->__set('nome', $_POST['nome']);
    $cadastroModel->__set('dataNascimento', $_POST['data_nascimento']);
    $cadastroModel->__set('genero', $_POST['genero']);
    $cadastroModel->__set('cpf', $_POST['cpf']);
    $cadastroModel->__set('endereco', $_POST['logradouro'] . ' ' . $_POST['numero'] . ', ' . $_POST['bairro'] . ', ' . $_POST['cidade'] . ', ' . $_POST['uf'] . ', ' . $_POST['pais']);
    $cadastroModel->__set('telefone', $_POST['telefone']);
    $cadastroModel->__set('email', $_POST['email']);
    $cadastroModel->__set('numeroMatricula', $_POST['num_matricula']);
    $cadastroModel->__set('senha', $_POST['senha']);

    // Verificando o tipo de cadastro selecionado
    if ($_POST['tipoCadastro'] == 'Recepcionista') {
        var_dump($cadastroModel);
        echo $cadastroModel->nome . 'teste propriedade';
        echo $_POST['nome'] . 'teste form';
        echo $_POST['tipoCadastro'] . 'teste form';
        $cadastroService = new CadastroService($conexao, $cadastroModel);
        $cadastroService->cadastrarRecepcionista();
    } elseif ($_POST['tipoCadastro'] == 'Medico') {
        $cadastroModel->__set('especialidade', $_POST['especialidades']);
        $cadastroService = new CadastroService($conexao, $cadastroModel);
        $cadastroService->cadastrarMedico();
    } elseif ($_POST['tipoCadastro'] == 'Laboratorio') {
        $cadastroModel->__set('cnpj', $_POST['cnpj']);
        $cadastroService = new CadastroService($conexao, $cadastroModel);
        $cadastroService->cadastrarLaboratorio();
    } else{
        var_dump($cadastroModel);
        echo $cadastroModel->nome . 'teste propriedade';
        echo $_POST['nome'] . 'teste form';
        echo $_POST['tipoCadastro'] . 'teste form';
    }

    header('Location: index.php?inclusao=1');
} elseif ($acao == 'recuperar') {
    // Recuperar dados, se necessário
} elseif ($acao == 'atualizar') {
    // Atualizar dados, se necessário
} elseif ($acao == 'remover') {
    // Remover dados, se necessário
} elseif ($acao == 'marcarRealizada') {
    // Marcar realizada, se necessário
} elseif ($acao == 'recuperarTarefasPendentes') {
    // Recuperar tarefas pendentes, se necessário
}

?>

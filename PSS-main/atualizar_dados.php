<?php

$modoEdicao = false;

if (isset($_POST['salvar-alteracoes'])) {

    $form_nome_completo = $_POST['form-nome-completo'];
    $form_data_nascimento = $_POST['form-data-nascimento'];
    $form_cpf = $_POST['form-cpf'];
    $form_rg = $_POST['form-rg'];
    $form_estado_rg = $_POST['form-estado-rg'];
    $form_email = $_POST['form-email'];
    $form_sexo = $_POST['form-sexo'];
    $form_canhoto = $_POST['form-canhoto'];
    $form_estado_civil = $_POST['form-estado-civil'];
    $form_nome_mae = $_POST['form-nome-mae'];
    $form_nome_pai = $_POST['form-nome-pai'];
    $form_nacionalidade = $_POST['form-nacionalidade'];
    $form_naturalidade = $_POST['form-naturalidade'];
    $form_cep = $_POST['form-cep'];
    $form_rua = $_POST['form-rua'];
    $form_numero_da_casa = $_POST['form-numero-da-casa'];
    $form_complemento = $_POST['form-complemento'];
    $form_bairro = $_POST['form-bairro'];
    $form_cidade = $_POST['form-cidade'];
    $form_uf = $_POST['form-uf'];
    $form_telefone = $_POST['form-telefone'];
    $form_celular = $_POST['form-celular'];

    if (
        $form_nome_completo != $dadosAntigos['nome_completo'] || $form_data_nascimento != $dadosAntigos['data_nascimento'] || $form_cpf != $dadosAntigos['cpf'] || $form_rg != $dadosAntigos['rg'] || $form_estado_rg !=  $dadosAntigos['estado_rg'] || $form_email !=  $dadosAntigos['email'] ||
        $form_sexo !=  $dadosAntigos['sexo'] ||  $form_canhoto != $dadosAntigos['canhoto'] || $form_estado_civil !=  $dadosAntigos['estado_civil'] ||  $form_nome_mae != $dadosAntigos['nome_mae'] || $form_nome_pai !=  $dadosAntigos['nome_pai'] || $form_nacionalidade !=  $dadosAntigos['nacionalidade'] ||
        $form_nacionalidade !=  $dadosAntigos['naturalidade'] || $form_cep !=  $dadosAntigos['cep'] || $form_rua !=  $dadosAntigos['rua'] || $form_numero_da_casa !=  $dadosAntigos['numero_casa'] || $form_complemento !=  $dadosAntigos['complemento'] || $form_bairro !=  $dadosAntigos['bairro'] || $form_cidade !=  $dadosAntigos['cidade'] || $form_uf !=  $dadosAntigos['uf'] ||
        $form_telefone !=  $dadosAntigos['telefone'] || $form_celular !=  $dadosAntigos['celular']
    ) {

        $atualizar_dados = $conn->prepare('UPDATE `tb_usuario` SET nome_completo = :pNome_completo, data_nascimento = :pData_nascimento, cpf = :pCpf, rg = :pRg, estado_rg = :pEstado_rg, email = :pEmail, sexo = :pSexo,
                                                    canhoto = :pCanhoto, estado_civil = :pEstado_civil, nome_mae = :pNome_mae, nome_pai = :pNome_pai, nacionalidade = :pNacionalidade, naturalidade = :pNaturalidade, cep = :pCep, rua = :pRua, numero_casa = :pNumero_casa,
                                                    complemento = :pComplemento, bairro = :pBairro, cidade = :pCidade, uf = :pUf, telefone = :pTelefone, celular = :pCelular WHERE id_usuario = :pId_usuario');

        $atualizar_dados->bindValue(":pNome_completo", $form_nome_completo);
        $atualizar_dados->bindValue(":pData_nascimento", $form_data_nascimento);
        $atualizar_dados->bindValue(":pCpf", $form_cpf);
        $atualizar_dados->bindValue(":pRg", $form_rg);
        $atualizar_dados->bindValue(":pEstado_rg", $form_estado_rg);
        $atualizar_dados->bindValue(":pEmail", $form_email);
        $atualizar_dados->bindValue(":pSexo", $form_sexo);
        $atualizar_dados->bindValue(":pCanhoto", $form_canhoto);
        $atualizar_dados->bindValue(":pEstado_civil", $form_estado_civil);
        $atualizar_dados->bindValue(":pNome_mae", $form_nome_mae);
        $atualizar_dados->bindValue(":pNome_pai", $form_nome_pai);
        $atualizar_dados->bindValue(":pNacionalidade", $form_nacionalidade);
        $atualizar_dados->bindValue(":pNaturalidade", $form_naturalidade);
        $atualizar_dados->bindValue(":pCep", $form_cep);
        $atualizar_dados->bindValue(":pRua", $form_rua);
        $atualizar_dados->bindValue(":pNumero_casa", $form_numero_da_casa);
        $atualizar_dados->bindValue(":pComplemento", $form_complemento);
        $atualizar_dados->bindValue(":pBairro", $form_bairro);
        $atualizar_dados->bindValue(":pCidade", $form_cidade);
        $atualizar_dados->bindValue(":pUf", $form_uf);
        $atualizar_dados->bindValue(":pTelefone", $form_telefone);
        $atualizar_dados->bindValue(":pCelular", $form_celular);
        $atualizar_dados->bindValue(":pId_usuario", $_SESSION['login']);

        $atualizar_dados->execute();

        header('location: area-usuario.php');
        exit();
    }
}

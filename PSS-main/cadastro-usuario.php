<?php

include "conn.php";

if (isset($_POST['criar-conta'])) {

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
    $form_senha = $_POST['form-senha'];
    $form_telefone = $_POST['form-telefone'];
    $form_celular = $_POST['form-celular'];

    $gravar = $conn->prepare('INSERT INTO `tb_usuario` (`id_usuario`, `nome_completo`, `data_nascimento`, `cpf`, `rg`, `estado_rg`, `email`, `sexo`, `canhoto`, `estado_civil`, `nome_mae`, `nome_pai`, `nacionalidade`, `naturalidade`, `cep`, `rua`, `numero_casa`, `complemento`, `bairro`, `cidade`, `uf`, `senha`, `telefone`, `celular`) 
                              VALUES (NULL,                             :pNome_completo, :pData_nascimento, :pCpf, :pRg, :pEstado_rg, :pEmail, :pSexo, :pCanhoto, :pEstado_civil, :pNome_mae, :pNome_pai, :pNacionalidade, :pNaturalidade, :pCep, :pRua, :pNumero_casa, :pComplemento, :pBairro, :pCidade, :pUf, md5(:pSenha), :pTelefone, :pCelular);');

    $gravar->bindValue(":pNome_completo", $form_nome_completo);
    $gravar->bindValue(":pData_nascimento", $form_data_nascimento);
    $gravar->bindValue(":pCpf", $form_cpf);
    $gravar->bindValue(":pRg", $form_rg);
    $gravar->bindValue(":pEstado_rg", $form_estado_rg);
    $gravar->bindValue(":pEmail", $form_email);
    $gravar->bindValue(":pSexo", $form_sexo);
    $gravar->bindValue(":pCanhoto", $form_canhoto);
    $gravar->bindValue(":pEstado_civil", $form_estado_civil);
    $gravar->bindValue(":pNome_mae", $form_nome_mae);
    $gravar->bindValue(":pNome_pai", $form_nome_pai);
    $gravar->bindValue(":pNacionalidade", $form_nacionalidade);
    $gravar->bindValue(":pNaturalidade", $form_naturalidade);
    $gravar->bindValue(":pCep", $form_cep);
    $gravar->bindValue(":pRua", $form_rua);
    $gravar->bindValue(":pNumero_casa", $form_numero_da_casa);
    $gravar->bindValue(":pComplemento", $form_complemento);
    $gravar->bindValue(":pBairro", $form_bairro);
    $gravar->bindValue(":pCidade", $form_cidade);
    $gravar->bindValue(":pUf", $form_uf);
    $gravar->bindValue(":pSenha", $form_senha);
    $gravar->bindValue(":pTelefone", $form_telefone);
    $gravar->bindValue(":pCelular", $form_celular);

    $gravar->execute();

    session_start();
    $row = $gravar->fetch();
    $id_login = $row['id_log'];
    $_SESSION['login'] = $id_login;
    
    header('location: area-usuario.php');
}

?>
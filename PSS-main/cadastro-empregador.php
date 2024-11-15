<?php

include "conn.php";

if (isset($_POST['criar-conta'])) {

    $form_nome_empresa = $_POST['form-nome-empresa'];
    $form_cnpj = $_POST['form-cnpj'];
    $form_email = $_POST['form-email'];
    $form_cep = $_POST['form-cep'];
    $form_rua = $_POST['form-rua'];
    $form_numero_endereco_empresa = $_POST['form-numero-endereco-empresa'];
    $form_complemento = $_POST['form-complemento'];
    $form_bairro = $_POST['form-bairro'];
    $form_cidade = $_POST['form-cidade'];
    $form_uf = $_POST['form-uf-empresa'];
    $form_senha = $_POST['form-senha'];
    $form_telefone = $_POST['form-telefone'];
    $form_celular = $_POST['form-celular'];

    $gravar = $conn->prepare('INSERT INTO `tb_empregador` (`id_empregador`, `nome_empresa`, `cnpj`, `email`, `cep`, `rua`, `numero_endereco_empresa`, `complemento`, `bairro`, `cidade`, `uf`, `senha`, `telefone`, `celular`) 
                        VALUES (NULL,                             :pNome_empresa, :pCnpj, :pEmail, :pCep, :pRua, :pNumero_endereco_empresa, :pComplemento, :pBairro, :pCidade, :pUf, md5(:pSenha), :pTelefone, :pCelular);');

    $gravar->bindValue(":pNome_empresa", $form_nome_empresa);
    $gravar->bindValue(":pCnpj", $form_cnpj);
    $gravar->bindValue(":pEmail", $form_email);
    $gravar->bindValue(":pCep", $form_cep);
    $gravar->bindValue(":pRua", $form_rua);
    $gravar->bindValue(":pNumero_endereco_empresa", $form_numero_endereco_empresa);
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
    
    header('location: area-empregador.php');
}

?>
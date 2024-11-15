<?php

if (isset($_POST['enviar-arquivo'])) {

    $tipo_curso = $_POST['form-tipo-curso'];
    $graduacao = $_POST['form-graduacao'];
    $curso = $_POST['form-curso-graduacao'];
    $orgao_emissor = $_POST['form-orgao-emissor'];
    $data_emissao = $_POST['form-data-emissao'];
    $nome_arquivo = $_POST['form-nome-arquivo'];

    $_UP['pasta'] = "upload_certificados_cursos/";
    $_UP['tamanho'] = 1024 * 1024 * 2; // 2mb.
    $_UP['extensao'] = array('pdf');
    $_UP['renomear'] = false;

    //Validação da extensão.
    $explode = explode('.', $_FILES['arquivo-certificado-graduacao']['name']); // Separa o nome do arquivo da extenção através do ponto.
    $aponta = end($explode); //Aponta para o último registro, a extenção.
    $extensao = strtolower($aponta);

    if (array_search($extensao, $_UP['extensao']) === false) {
        echo "Extensão não aceita.";
    }

    //Validação de tamanho.
    if ($_UP['tamanho'] <= $_FILES['arquivo-certificado-graduacao']['size']) {
        echo "Arquivo muito grande.";
    }

    //Renomear o arquivo.
    if ($_UP['renomear'] === true) {
        $nome_final = md5(time()) . ". $extensao";
    } else {
        $nome_final = $_FILES['arquivo-certificado-graduacao']['name'];
    }

    if (move_uploaded_file($_FILES['arquivo-certificado-graduacao']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        $url = $_UP['pasta'] . $nome_final;

        $enviar_arquivo = $conn->prepare('INSERT INTO `certificados_cursos` (`url_certificado`, `tipo_curso`, `id_usuario`, `graduacao`, `curso`, `orgao_emissor`, `data_emissao`, `nome_arquivo`) VALUES (:pUrl, :pTipo_curso, :pId_usuario, :pGraduacao, :pCurso, :pOrgao_emissor, :pData_emissao, :pNome_arquivo);');
        $enviar_arquivo->bindValue(':pUrl', $url);
        $enviar_arquivo->bindValue(':pTipo_curso', $tipo_curso);
        $enviar_arquivo->bindValue(':pGraduacao', $graduacao);
        $enviar_arquivo->bindValue(':pCurso', $curso);
        $enviar_arquivo->bindValue(':pOrgao_emissor', $orgao_emissor);
        $enviar_arquivo->bindValue(':pData_emissao', $data_emissao);
        $enviar_arquivo->bindValue(':pNome_arquivo', $nome_arquivo);
        $enviar_arquivo->bindValue(':pId_usuario', $_SESSION['login']);
        $enviar_arquivo->execute();
    }
}

?>
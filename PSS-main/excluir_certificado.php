<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_certificado'])) {
    $id_certificado = $_POST['id_certificado'];
    
    $excluir_certificado = $conn->prepare('DELETE FROM `certificados_cursos` WHERE id = :pCertificadoId');
    $excluir_certificado->bindValue(':pCertificadoId', $id_certificado);
    $excluir_certificado->execute();
    
    // Redireciona de volta para a página do usuário após a exclusão
    header('Location: area-usuario.php');
    exit();
}

?>
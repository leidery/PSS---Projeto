<?php
include 'conn.php'; // Conexão com o banco de dados

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar se o token é válido
    try {
        $stmt = $conn->prepare('SELECT id_usuario FROM tb_usuario WHERE token_recuperacao = :token');
        $stmt->bindParam(':token', $token);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Processar a nova senha
                $nova_senha = $_POST['nova_senha'];
                $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT); // Hash da senha

                // Atualizar a senha no banco e limpar o token
                $stmt = $conn->prepare('UPDATE tb_usuario SET senha = :senha, token_recuperacao = NULL WHERE id_usuario = :id_usuario');
                $stmt->bindParam(':senha', $senha_hash);
                $stmt->bindParam(':id_usuario', $user['id_usuario']);
                $stmt->execute();

                echo 'Senha alterada com sucesso! Você pode fazer o login agora.';
            }
        } else {
            echo 'Token inválido ou expirado.';
        }
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alterar Senha</title>
</head>
<body>
    <h2>Alterar Senha</h2>
    <form action="alterar_senha.php?token=<?php echo $token; ?>" method="POST">
        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required>
        <button type="submit">Alterar Senha</button>
    </form>
</body>
</html>

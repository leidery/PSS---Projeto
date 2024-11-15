<?php
include 'conn.php'; // Conexão com o banco de dados
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php'; // Caminho correto para o autoload do PHPMailer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verificar se o email existe no banco de dados
    try {
        $stmt = $conn->prepare('SELECT id_usuario, email FROM tb_usuario WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Gerar um token para a recuperação de senha
            $token = bin2hex(random_bytes(50)); // Gera um token aleatório

            // Salvar o token no banco de dados para este usuário
            $stmt = $conn->prepare('UPDATE tb_usuario SET token_recuperacao = :token WHERE id_usuario = :id_usuario');
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':id_usuario', $user['id_usuario']);
            $stmt->execute();

            // Enviar o e-mail com o link de recuperação
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Configure seu servidor de e-mail
                $mail->SMTPAuth = true;
                $mail->Username = 'pssfacil0@gmail.com'; // Seu e-mail
                $mail->Password = 'SUA_SENHA_DE_APP'; // Sua senha de app
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('pssfacil0@gmail.com', 'Sistema de Recuperação');
                $mail->addAddress($email, 'Usuário');

                $mail->isHTML(true);
                $mail->Subject = 'Recuperação de Senha';
                $mail->Body    = "Clique no link abaixo para alterar sua senha:<br><a href='http://localhost/alterar_senha.php?token=$token'>Alterar senha</a>";

                $mail->send();
                // Redireciona para a página de sucesso
                header('Location: email_enviado.php');
                exit;
            } catch (Exception $e) {
                echo "Erro ao enviar o e-mail. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo 'E-mail não encontrado.';
        }
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
?>

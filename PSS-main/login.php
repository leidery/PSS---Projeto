<?php
session_start();

if (isset($_POST["entrar"])) {
    if (!empty($_POST["form-cpf"]) && (!empty($_POST["form-senha"]))) {

        include "conn.php";

        $form_cpf = $_POST['form-cpf'];
        $form_senha = $_POST['form-senha'];

        $ver_login = $conn->prepare('SELECT * FROM `tb_usuario` WHERE `cpf` = :pCpf AND `senha` = md5(:pSenha);');

        $ver_login->bindValue(':pCpf', $form_cpf);
        $ver_login->bindValue(':pSenha', $form_senha);
        $ver_login->execute();

        if ($ver_login->rowCount() == 0) {
            $_SESSION["errorMessage"] = "CPF ou senha inválido.";
        } else {
            $row = $ver_login->fetch();
            $id_login = $row['id_usuario'];
            $_SESSION['login'] = $id_login;

            header('location: area-usuario.php');
            exit();
        }
    } else {
        $_SESSION["errorMessage"] = "Obrigatótio informar login e senha.";
    }
}

?>
<form action="#" method="POST" class="p-4 md-5 border rounded-3 bg-light" id="container-entrar">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="input-cpf" name="form-cpf" require placeholder="cpf" />
        <label for="input-nome">CPF</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="input-password" name="form-senha" require placeholder="Senha" />
        <label for="input-password">Senha</label>
    </div>
    <?php
    if (isset($_SESSION["errorMessage"])) {
    ?>
        <div class="error-message" style="color: red; font-size:14px; margin-bottom: 15px;"><?php echo $_SESSION["errorMessage"]; ?></div>
    <?php
        unset($_SESSION["errorMessage"]);
    }
    ?>
    <input class="btn btn-primary enviar-btn" name="entrar" type="submit" value="Entrar">
    <div class="row">
        <a class="mb-2" href="#">Esqueci minha senha</a>
        <a class="mb-2" href="criar-conta.php">Não possui uma conta? Cadastre-se</a>
        <a class="mb-2" href="entrar-empregador.php">É empregador? Entre aqui!</a>
    </div>
</form>
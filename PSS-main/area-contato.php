<?php

include "conn.php";

if (isset($_SESSION['login'])) {
    $consulta_dados = $conn->prepare('SELECT * FROM `tb_usuario` WHERE id_usuario = :pId_usuario');
    $consulta_dados->bindValue(':pId_usuario', $_SESSION['login']);
    $consulta_dados->execute();
    $row_dados = $consulta_dados->fetch();
}

if (isset($_POST['enviar-mensagem'])) {
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $gravar = $conn->prepare('INSERT INTO `mensagens_usuario` (`mensagem_usuario`, `assunto`, `id_usuario`) VALUES (:pMensagem, :pAssunto, :pId_usuario);');

    $gravar->bindValue(':pMensagem', $mensagem);
    $gravar->bindValue(':pAssunto', $assunto);
    $gravar->bindValue(':pId_usuario', $_SESSION['login']);
    $gravar->execute();
}
?>

<?php if (!isset($_GET['logged_out']) || ($_GET['logged_out'] !== 'true')) : ?>
    <div id="contato">
        <div class="container mt-5">
            <div class="col-md-12">
                <h3>Fale conosco</h3>
                <p>ENTRE EM CONTATO PARA ESCLARECER SUAS DÚVIDAS</p>
            </div>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="form-nome-completo" name="form-nome-completo" placeholder="Nome completo" value="<?php echo isset($row_dados['nome_completo']) && !empty($row_dados['nome_completo']) ? $row_dados['nome_completo'] : ''; ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo isset($row_dados['email']) && !empty($row_dados['email']) ? $row_dados['email'] : ''; ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="form-telefone" name="form-telefone" placeholder="Telefone" value="<?php echo isset($row_dados['telefone']) && !empty($row_dados['telefone']) ? $row_dados['telefone'] : ''; ?>">
                    </div>
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="form-celular" name="form-celular" placeholder="celular" value="<?php echo isset($row_dados['celular']) && !empty($row_dados['celular']) ? $row_dados['celular'] : ''; ?>" required>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem" required></textarea>
                    </div>
                </div>
                <div id="btns">
                    <button type="submit" class="btn btn-primary btn-lg enviar-btn" id="enviar-mensagem" name="enviar-mensagem">Enviar</button>
                    <button type="button" class="btn btn-primary btn-lg" id="limpar-btn" name="limpar-btn">Limpar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
<?php endif; ?>
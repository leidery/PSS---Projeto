<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>
<body>
    <main class="main">
        <div class="container" id="form-principal">
            <h1>Formulário de inscrição</h1>
            <form action="cadastro-empregador.php" method="POST">
                <div class="mb-3">
                    <label for="form-nome-da-empresa" class="form-label">Nome da empresa:</label>
                    <input type="text" class="form-control" id="form-nome-da-empresa" name="form-nome-da-empresa" > <!--required-->
                </div>
              
                <div class="mb-3">
                    <label for="form-cep" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="form-email" name="form-email" placeholder="email" > <!--required-->
                </div>
               
                <div class="mb-3">
                    <label for="form-ccnpj" class="form-cnpj">CNPJ:</label>
                    <input type="text" class="form-control" id="form-cnpj" name="form-cnpj" placeholder="00.000.000/0000-00." > <!--required-->
                </div>
                <div>
                    <label for="form-uf-empresa" class="form-uf-empresa">UF:</label>
                    <input type="text" class="form-control" id="form-uf-empresa" name="uf-empresa">
                </div>
                <div class="mb-3">
                    <label for="form-telefone" class="form-telefone">Telefone:</label>
                    <input type="number" class="form-control" id="form-telefone" name="form-telefone">
                </div>
                <div class="mb-3">
                    <label for="form-celular" class="form-celular">Celular:</label>
                    <input type="number" class="form-control" id="form-celular" name="form-celular" requierd>
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="form-cep" name="form-cep" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-rua" class="form-label">Rua:</label>
                    <input type="text" class="form-control" id="form-rua" name="form-rua" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-numero-da-casa" class="form-label">Número da casa:</label>
                    <input type="text" class="form-control" id="form-numero-da-casa" name="form-numero-da-casa" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-complemento" class="form-label">Complemento:</label>
                    <input type="text" class="form-control" id="form-complemento" name="form-complemento" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="form-bairro" name="form-bairro" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="form-cidade" name="form-cidade" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="form-senha" name="form-senha" > <!--required-->

                    <input class="btn btn-primary enviar-btn" name="criar-conta" type="submit" value="Criar conta">
                </div>
            </form>    
        </div>
    </main>

    <?php
    include "cadastro-empregador.php";
    ?>
    <script src="js/script.js"></script>

</body>
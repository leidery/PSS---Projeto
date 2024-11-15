<?php
session_start();

include "conn.php";
include "excluir_certificado.php";
include "atualizar_dados.php";

if (isset($_POST["enviar-arquivo"]) || (isset($_POST["enviar-arquivo-pos-graduacao"])) || (isset($_POST["enviar-arquivo-mestrado"]))) {

    if (isset($_POST["enviar-arquivo"])) {
        include "upload_certificados_graduacao.php";
    }
    if (isset($_POST["enviar-arquivo-pos-graduacao"])) {
        include "upload_certificados_pos_graduacao.php";
    }
    if (isset($_POST["enviar-arquivo-mestrado"])) {
        include "upload_certificados_mestrado.php";
    }

    header('location: area-usuario.php');
}

if (isset($_GET['logout'])) {
    session_unset(); // Limpa os dados da sessão.
    session_destroy();
    $_SESSION = array(); // Limpa os dados da sessão do array global $_SESSION.
    header('location: entrar.php?logged_out=true');
    exit();
}

// Se não estiver logado, não dá acesso a essa página.
if (!isset($_SESSION['login'])) {
    header('location: entrar.php');
    exit();
}

// Verifica se está no modo de edição
if (isset($_POST['editar'])) {
    $modoEdicao = true;
}

//Exibição dos dados do usuário.
$consulta_dados = $conn->prepare('SELECT * FROM `tb_usuario` WHERE id_usuario = :pId_usuario');
$consulta_dados->bindValue(':pId_usuario', $_SESSION['login']);
$consulta_dados->execute();
$row_dados = $consulta_dados->fetch();

?>

<!DOCTYPE php>
<php lang="pt-br">

    <?php
    include "headHTML.php"
    ?>

    <body class="body-area-usuario">

        <?php
        include "nav-lateral.php";
        ?>

        <!-- Menu mobile -->

        <button class="button-mobile" onclick="toggleMenu()">
            <span class="material-symbols-outlined">
                Menu
            </span>
        </button>

        <nav class="menu-mobile" id="menu-mobile">
            <button class="button-close" onclick="toggleMenu()">
                <span class="material-symbols-outlined">
                    close
                </span>
            </button>
            <button>
                <span>
                    <i class="bi bi-house"></i>
                    <span class="mobile-text">Home</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="bi bi-person"></i>
                    <span class="mobile-text">Cadastro</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="bi bi-flag"></i>
                    <span class="mobile-text">Inscrições</span>
                </span>
            </button>
        </nav>

        <!-- Fim menu mobile -->

        <main class="main">
            <form action="cadastro.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="form-cpf" class="form-cpf">CPF:</label>
                        <input type="text" class="form-control" id="form-cpf" name="form-cpf" placeholder="000.000.000-00" value="<?php echo $row_dados['cpf'] ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-rg" class="form-rg">RG:</label>
                        <input type="text" class="form-control" id="form-rg" name="form-rg" placeholder="00.000.000-0" value="<?php echo $row_dados['rg']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-estado-rg" class="form-estado-rg">Estado do R.G.:</label>
                        <select class="form-select" id="form-estado-rg" name="form-estado-rg" <?php echo ($modoEdicao) ? '' : 'disabled'; ?> style="background-color: white;">
                            <?php
                            $estados_rg = [
                                1 => 'Acre(AC)',
                                2 => 'Alagoas(AL)',
                                3 => 'Amapá(AP)',
                                4 => 'Bahia(BA)',
                                5 => 'Ceará(CE)',
                                6 => 'Distrito Federal(DF)',
                                7 => 'Espírito Santo(ES)',
                                8 => 'Goiás(GO)',
                                9 => 'Maranhão(MA)',
                                10 => 'Mato Grosso(MT)',
                                11 => 'Mato Grosso do Sul(MS)',
                                12 => 'Minas Gerai(MG)',
                                13 => 'Pará(PA)',
                                14 => 'Paraíba(PB)',
                                15 => 'Paraná(PR)',
                                16 => 'Pernambuco(PE)',
                                17 => 'Piauí(PI)',
                                18 => 'Rio de Janeiro(RJ)',
                                19 => 'Rio Grande do Norte(RN)',
                                20 => 'Rio Grande do Sul(RS)',
                                21 => 'Rondônia(RO)',
                                22 => 'Roraima(RR)',
                                23 => 'Santa Catarina(SC)',
                                24 => 'São Paulo(SP)',
                                25 => 'Sergipe(SE)',
                                26 => 'Tocantins(TO)',
                            ];

                            foreach ($estados_rg as $value => $label) {
                                $selected = ($row_dados['estado_rg'] == $value) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$label</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-3">
                        <label for="form-data-nascimento" class="form-data-nascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="form-data-nascimento" name="form-data-nascimento" value="<?php echo $row_dados['data_nascimento']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="form-nome-completo" class="form-nome-completo">Nome Completo:</label>
                        <input type="text" class="form-control" id="form-nome-completo" name="form-nome-completo" placeholder="Nome completo" value="<?php echo $row_dados['nome_completo']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-email" class="form-email">Email:</label>
                        <input type="email" class="form-control" id="form-email" name="form-email" value="<?php echo $row_dados['email']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-sexo" class="form-sexo">Sexo:</label>
                        <select class="form-select col-3" id="form-sexo" name="form-sexo" <?php echo ($modoEdicao) ? '' : 'disabled'; ?> style="background-color: white;">
                            <?php
                            $sexo = [
                                1 => 'Masculino',
                                2 => 'Feminino',
                            ];

                            foreach ($sexo as $value => $label) {
                                $selected = ($row_dados['sexo'] == $value) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$label</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-canhoto" class="form-canhoto">Canhoto:</label>
                        <select class="form-select col-3" id="form-canhoto" name="form-canhoto" <?php echo ($modoEdicao) ? '' : 'disabled'; ?> style="background-color: white;">
                            <?php
                            $canhoto = [
                                1 => 'Sim',
                                2 => 'Não',
                            ];

                            foreach ($canhoto as $value => $label) {
                                $selected = ($row_dados['canhoto'] == $value) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$label</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-estado-civil" class="form-estado-civil">Estado Civil:</label>
                        <select class="form-select col-3" id="form-estado-civil" name="form-estado-civil" <?php echo ($modoEdicao) ? '' : 'disabled'; ?> style="background-color: white;">
                            <option selected>Selecione</option>
                            <option value="1">Solteiro</option>
                            <option value="2">Casado</option>
                            <option value="3">Separado</option>
                            <option value="4">Divorciado</option>
                            <option value="5">Viúvo</option>
                            <?php
                            $estado_civil = [
                                1 => 'Solteiro',
                                2 => 'Casado',
                                3 => 'Separado',
                                4 => 'Divorciado',
                                5 => 'Viúvo',
                            ];

                            foreach ($estado_civil as $value => $label) {
                                $selected = ($row_dados['estado_civil'] == $value) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$label</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-nacionalidade" class="form-nacionalidade">Nacionalidade:</label>
                        <input type="text" class="form-control" id="form-nacionalidade" name="form-nacionalidade" value="<?php echo $row_dados['nacionalidade']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-naturalidade" class="form-naturalidade">Naturalidade:</label>
                        <select class="form-select" id="form-naturalidade" name="form-naturalidade" <?php echo ($modoEdicao) ? '' : 'disabled'; ?> style="background-color: white;">
                            <?php
                            $naturalidade = [
                                1 => 'Acre(AC)',
                                2 => 'Alagoas(AL)',
                                3 => 'Amapá(AP)',
                                4 => 'Bahia(BA)',
                                5 => 'Ceará(CE)',
                                6 => 'Distrito Federal(DF)',
                                7 => 'Espírito Santo(ES)',
                                8 => 'Goiás(GO)',
                                9 => 'Maranhão(MA)',
                                10 => 'Mato Grosso(MT)',
                                11 => 'Mato Grosso do Sul(MS)',
                                12 => 'Minas Gerai(MG)',
                                13 => 'Pará(PA)',
                                14 => 'Paraíba(PB)',
                                15 => 'Paraná(PR)',
                                16 => 'Pernambuco(PE)',
                                17 => 'Piauí(PI)',
                                18 => 'Rio de Janeiro(RJ)',
                                19 => 'Rio Grande do Norte(RN)',
                                20 => 'Rio Grande do Sul(RS)',
                                21 => 'Rondônia(RO)',
                                22 => 'Roraima(RR)',
                                23 => 'Santa Catarina(SC)',
                                24 => 'São Paulo(SP)',
                                25 => 'Sergipe(SE)',
                                26 => 'Tocantins(TO)',
                            ];

                            foreach ($naturalidade as $value => $label) {
                                $selected = ($row_dados['naturalidade'] == $value) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$label</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="form-nome-mae" class="form-nome-mae">Nome da Mãe:</label>
                        <input type="text" class="form-control" id="form-nome-mae" name="form-nome-mae" value="<?php echo $row_dados['nome_mae']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="form-nome-pai" class="form-nome-pai">Nome do Pai:</label>
                        <input type="text" class="form-control" id="form-nome-pai" name="form-nome-pai" value="<?php echo $row_dados['nome_pai']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="form-telefone" class="form-telefone">Telefone:</label>
                        <input type="text" class="form-control" id="form-telefone" name="form-telefone" value="<?php echo $row_dados['telefone']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="form-celular" class="form-celular">Celular:</label>
                        <input type="text" class="form-control" id="form-celular" name="form-celular" value="<?php echo $row_dados['celular']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                </div>
                <div class="row">
                    <div class="aviso">
                        <h3>Atenção</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad modi adipisci ratione nihil
                            consectetur
                            aut hic eaque dolorem porro architecto nesciunt debitis, quisquam ipsa distinctio, excepturi
                            doloremque quidem illum. Ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                            tempora
                            sit minima laudantium qui explicabo sequi, adipisci deserunt doloremque ipsum, quibusdam vitae
                            magni
                            similique optio voluptas pariatur, obcaecati accusamus maxime.
                        </p>
                    </div>
                </div>
                <h3 class="mb-3">Endereço</h3>
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="form-cep" class="form-cep">CEP:</label>
                        <input type="text" class="form-control" id="form-cep" name="form-cep" placeholder="00000-000" value="<?php echo $row_dados['cep']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-uf" class="form-uf">Cidade:</label>
                        <input type="text" class="form-control" id="form-uf" name="form-uf" value="<?php echo $row_dados['cidade']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-rua" class="form-rua">Rua:</label>
                        <input type="text" class="form-control" id="form-rua" name="form-rua" value="<?php echo $row_dados['rua']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-numero-da-casa" class="form-numero-da-casa">Número:</label>
                        <input type="text" class="form-control" id="form-numero-da-casa" name="form-numero-da-casa" value="<?php echo $row_dados['numero_casa']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-bairro" class="form-bairro">Bairro:</label>
                        <input type="text" class="form-control" id="form-bairro" name="form-bairro" value="<?php echo $row_dados['bairro']; ?>">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-complemento" class="form-complemento">Complemento:</label>
                        <input type="text" class="form-control" id="form-complemento" name="form-complemento" value="<?php echo $row_dados['complemento']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3 col-3">
                        <label for="form-uf" class="form-uf">UF:</label>
                        <input type="text" class="form-control" id="form-uf" name="form-uf" value="<?php echo $row_dados['uf']; ?>" <?php echo ($modoEdicao) ? '' : 'readonly'; ?>>
                    </div>
                    <div class="mb-3">
                        <?php if (!$modoEdicao) : ?>
                            <!-- Botão "Editar" -->
                            <button type="submit" class="btn btn-primary btn-lg enviar-btn" name="editar">Editar</button>
                        <?php endif; ?>

                        <?php if ($modoEdicao) : ?>
                            <!-- Botão "Salvar" -->
                            <button type="submit" class="btn btn-primary btn-lg enviar-btn" name="salvar-alteracoes">Salvar</button>
                        <?php endif; ?>
                    </div>
                </div>
                <h3 class="mb-3">Cursos</h3>
                <div class="row">
                    <div class="col-3">
                        <label for="form-tipo-curso" class="form-label">Tipo do curso:</label>
                        <select class="form-select mb-3" id="form-tipo-curso" name="form-tipo-curso">
                            <option selected>Selecione</option>
                            <option value="1">Gradução</option>
                            <option value="2">Pós graduação</option>
                            <option value="3">Mestrado</option>
                        </select>
                        <label for="form-rg" class="form-label">Gradução:</label>
                        <select class="form-select mb-3" id="form-graduacao" name="form-graduacao">
                            <option selected>Selecione</option>
                            <option value="1">Em andamento</option>
                            <option value="2">Concluído</option>
                        </select>
                        <div class="mb-3">
                            <label for="form-curso" class="form-curso">Curso:</label>
                            <input type="text" class="form-control" id="form-curso-graduacao" name="form-curso-graduacao">
                        </div>
                        <div class="mb-3">
                            <label for="form-orgao-emissor" class="form-orgao-emissor">Órgão Emissor:</label>
                            <input type="text" class="form-control" id="form-orgao-emissor" name="form-orgao-emissor">
                        </div>
                        <div class="mb-3">
                            <label for="form-data-emissao" class="form-data-emissao">Data de emissão:</label>
                            <input type="date" class="form-control" id="form-data-emissao" name="form-data-emissao">
                        </div>
                        <div class="mb-3">
                            <label for="arquivo-certificado-graduacao" class="form-label">Certificado:</label>
                            <input type="file" class="form-control" id="arquivo-certificado-graduacao" name="arquivo-certificado-graduacao">
                        </div>
                        <div class="mb-3">
                            <label for="form-nome-arquivo" class="form-label">Nome do arquivo:</label>
                            <input type="text" class="form-control" id="form-nome-arquivo" name="form-nome-arquivo">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg enviar-btn" id="enviar-arquivo" name="enviar-arquivo">Enviar</button><br>
                    </div>
                    <div class="col-3 div-links-certificados">
                        <?php

                        //Exibição dos certificados de graduação.
                        $consulta_certificados = $conn->prepare('SELECT * FROM  `certificados_cursos` WHERE id_usuario = :pId_usuario');
                        $consulta_certificados->bindValue(':pId_usuario', $_SESSION['login']);
                        $consulta_certificados->execute();

                        while ($row_certificados = $consulta_certificados->fetch()) {
                            echo '<form method="POST" action="excluir_certificado.php" class="certificado-form">';
                            echo '<input type="hidden" name="id_certificado" value="' . $row_certificados['id'] . '">';
                            echo '<a href="' . $row_certificados['url_certificado'] . '" class="certificado-link" target="_blank">Ver Certificado: ' . $row_certificados['nome_arquivo'] . '</a>';
                            echo '<button type="submit" class="certificado-link-excluir" onclick="return confirm(\'Tem certeza que deseja excluir este certificado?\')">Excluir</button>';
                            echo '</form>';
                            echo '<br>';
                        }

                        ?>
                    </div>
                </div>
            </form>
        </main>

        <script src="js/script.js"></script>
    </body>

    </html>

</php>
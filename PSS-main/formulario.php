<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>

<body>

    <aside class="sidebar">
        <header class="sidebar-header">
            <a href="index.html">
                <img class="logo-img" src="img/logo-final.png" alt="PSS Fácil, simplificado e organizado" style="background-color: #303030;">
            </a>
        </header>

        <nav>
            <button id="homeBtn" onclick="irParaHome()">
                <span>
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </span>
            </button>

            <button id="cadastroBtn" onclick="irParaCadastro()">
                <span>
                    <i class="bi bi-person"></i>
                    <span>Cadastro</span>
                </span>
            </button>

            <button id="inscricoesBtn" onclick="irParaIncricoes()">
                <span>
                    <i class="bi bi-flag"></i>
                    <span>Inscrições</span>
                </span>
            </button>
            <a href="entrar.php?logout=1">
                <button id="logoutBtn">
                    <span>
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </span>
                </button>
            </a>
        </nav>

    </aside>

    <nav>
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
    </nav>

    <main class="main">
        <div class="container" id="form-principal">
            <h1>Formulário de inscrição</h1>
            <form action="cadastro-usuario.php" method="POST">
                <label for="form-select" class="form-cargo-pretendido">Cargo pretendido:</label>
                <select class="form-select mb-3" id="form-cargo-pretendido" , name="form-cargo-pretendido">
                    <option selected>Selecione</option>
                    <option value="1">Assistente Administrativo</option>
                    <option value="2">Enfermeiro</option>
                    <option value="3">Médico Pediatra</option>
                    <option value="4">Médico Proctologista/Coloproctologista</option>
                    <option value="5">Técnico de Enfermagem</option>
                    <option value="6">Terapeuta Ocupacional</option>
                </select>
                <div class="mb-3">
                    <label for="form-nome-completo" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="form-nome-completo" name="form-nome-completo" required>
                </div>
                <div class="mb-3">
                    <label for="form-data-nascimento" class="form-label">Data de nascimento:</label>
                    <input type="date" class="form-control" id="form-data-nascimento" name="form-data-nascimento" required>
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="form-email" name="form-email" required>
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">Sexo:</label>
                    <input type="text" class="form-control" id="form-sexo" name="form-sexo" required>
                </div>
                <label for="form-naturalidade" class="form-label">Canhoto:</label>
                <select class="form-select mb-3" id="form-canhoto" name="form-canhoto" required>
                    <option selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="form-estado-civil" class="form-estado-civil">Estado Civil:</label>
                <select class="form-select col-3" id="form-estado-civil" name="form-estado-civil">
                    <option selected>Selecione</option>
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Separado</option>
                    <option value="4">Divorciado</option>
                    <option value="5">Viúvo</option>
                </select>
                <div class="mb-3 col-6">
                    <label for="form-nome-mae" class="form-nome-mae">Nome da Mãe:</label>
                    <input type="text" class="form-control" id="form-nome-mae" name="form-nome-mae" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="form-nome-pai" class="form-nome-pai">Nome do Pai:</label>
                    <input type="text" class="form-control" id="form-nome-pai" name="form-nome-pai">
                </div>
                <div class="mb-3 col-3">
                        <label for="form-nacionalidade" class="form-nacionalidade">Nacionalidade:</label>
                        <input type="text" class="form-control" id="form-nacionalidade" name="form-nacionalidade" required>
                    </div>
                <div class="mb-3">
                    <label for="form-naturalidade" class="form-label">Naturalidade:</label>
                    <select class="form-select mb-3" id="form-naturalidade" name="form-naturalidade" required>
                        <option selected>Selecione</option>
                        <option value="1">Acre(AC)</option>
                        <option value="2">Alagoas(AL)</option>
                        <option value="3">Amapá(Ap)</option>
                        <option value="4">Bahia(BA)</option>
                        <option value="5">Ceará(CE)</option>
                        <option value="5">Distrito Federal(DF)</option>
                        <option value="5">Espírito Santo(ES)</option>
                        <option value="5">Goás(GO)</option>
                        <option value="5">Maranhão(MA)</option>
                        <option value="5">Mato Grosso(MT)</option>
                        <option value="5">Mato Grosso do Sul(MS)</option>
                        <option value="5">Minas Gerai(MG)</option>
                        <option value="5">Pará(PA)</option>
                        <option value="5">Paraíba(PB)</option>
                        <option value="5">Paraná(PR)</option>
                        <option value="5">Pernambuco(PE)</option>
                        <option value="5">Piauí(PI)</option>
                        <option value="5">Rio de Janeiro(RJ)</option>
                        <option value="5">Rio Grande do Norte(RN)</option>
                        <option value="5">Rio Grande do Sul(RS)</option>
                        <option value="5">Rondônia(RO)</option>
                        <option value="5">Roraima(RR)</option>
                        <option value="5">Santa Catarina(SC)</option>
                        <option value="5">São Paulo(SP)</option>
                        <option value="5">Sergipe(SE)</option>
                        <option value="5">Tocantins(TO)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="form-rua" class="form-label">Rua:</label>
                    <input type="text" class="form-control" id="form-rua" name="form-rua" required>
                </div>
                <div class="mb-3">
                    <label for="form-numero-da-casa" class="form-label">Número da casa:</label>
                    <input type="text" class="form-control" id="form-numero-da-casa" name="form-numero-da-casa" required>
                </div>
                <div class="mb-3">
                    <label for="form-complemento" class="form-label">Complemento:</label>
                    <input type="text" class="form-control" id="form-complemento" name="form-complemento" required>
                </div>
                <div class="mb-3">
                    <label for="form-bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="form-bairro" name="form-bairro" required>
                </div>
                <div class="mb-3">
                    <label for="form-cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="form-cidade" name="form-cidade" required>
                </div>
                <div class="mb-3">
                    <label for="form-uf" class="form-label">UF:</label>
                    <input type="text" class="form-control" id="form-uf" name="form-uf" required>
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="form-cep" name="form-cep" required>
                </div>
                <div class="mb-3">
                    <label for="form-rg" class="form-label">RG:</label>
                    <input type="text" class="form-control" id="form-rg" name="form-rg" placeholder="00.000.000-0" required>
                </div>
                <label for="form-naturalidade" class="form-label">Estado do rg:</label>
                <select class="form-select mb-3" id="form-estado-rg" name="form-estado-rg" required>
                    <option selected>Selecione</option>
                    <option value="1">Acre(AC)</option>
                    <option value="2">Alagoas(AL)</option>
                    <option value="3">Amapá(Ap)</option>
                    <option value="4">Bahia(BA)</option>
                    <option value="5">Ceará(CE)</option>
                    <option value="5">Distrito Federal(DF)</option>
                    <option value="5">Espírito Santo(ES)</option>
                    <option value="5">Goás(GO)</option>
                    <option value="5">Maranhão(MA)</option>
                    <option value="5">Mato Grosso(MT)</option>
                    <option value="5">Mato Grosso do Sul(MS)</option>
                    <option value="5">Minas Gerai(MG)</option>
                    <option value="5">Pará(PA)</option>
                    <option value="5">Paraíba(PB)</option>
                    <option value="5">Paraná(PR)</option>
                    <option value="5">Pernambuco(PE)</option>
                    <option value="5">Piauí(PI)</option>
                    <option value="5">Rio de Janeiro(RJ)</option>
                    <option value="5">Rio Grande do Norte(RN)</option>
                    <option value="5">Rio Grande do Sul(RS)</option>
                    <option value="5">Rondônia(RO)</option>
                    <option value="5">Roraima(RR)</option>
                    <option value="5">Santa Catarina(SC)</option>
                    <option value="5">São Paulo(SP)</option>
                    <option value="5">Sergipe(SE)</option>
                    <option value="5">Tocantins(TO)</option>
                </select>
                <div class="mb-3">
                    <label for="form-cpf" class="form-cpf">CPF:</label>
                    <input type="text" class="form-control" id="form-cpf" name="form-cpf" placeholder="000.000.000-00" required>
                </div>
                <label for="form-graduacao" class="form-label">Gradução:</label>
                <select class="form-select mb-3" id="form-graduacao" name="form-graduacao" required>
                    <option selected>Selecione</option>
                    <option value="1">Não possui</option>
                    <option value="1">Em andamento</option>
                    <option value="1">Concluído</option>
                </select>
                <div class="mb-3">
                    <label for="form-curso-graduacao" class="form-curso">Curso:</label>
                    <input type="text" class="form-control" id="form-curso-graduacao" name="form-curso-graduacao" required>
                </div>
                <label for="form-pos-graduacao" class="form-label">Pós Gradução:</label>
                <select class="form-select mb-3" id="form-pos-graduacao" name="form-pos-graduacao">
                    <option selected>Selecione</option>
                    <option value="1">Não possui</option>
                    <option value="1">Em andamento</option>
                    <option value="1">Concluído</option>
                </select>
                <div class="mb-3">
                    <label for="form-curso-pos-graduacao" class="form-curso">Curso:</label>
                    <input type="text" class="form-control" id="form-curso-pos-graduacao" name="form-curso-pos-graduacao">
                </div>
                <label for="form-mestrado" class="form-label">Mestrado:</label>
                <select class="form-select mb-3" id="form-mestrado" name="form-mestrado">
                    <option selected>Selecione</option>
                    <option value="1">Não possui</option>
                    <option value="1">Em andamento</option>
                    <option value="1">Concluído</option>
                </select>
                <div class="mb-3">
                    <label for="form-curso-mestrado" class="form-label">Curso:</label>
                    <input type="text" class="form-control" id="form-curso-mestrado" name="form-curso-mestrado">
                </div>
                <div class="mb-3">
                    <label for="form-orgao-emissor" class="form-label">Órgão emissor:</label>
                    <input type="text" class="form-control" id="form-orgao-emissor" name="form-orgao-emissor" required>
                </div>
                <div class="mb-5">
                    <label for="form-data-emissao" class="form-label">Data de emissão:</label>
                    <input type="date" class="form-control" id="form-data-emissao" name="form-data-emissao" required>
                </div>
                <h2>Reserva de vaga:</h2>
                <select class="form-select mb-3" id="form-reserva-vaga" name="form-reserva-vaga">
                    <option selected>Não</option>
                    <option value="1">Negro</option>
                    <option value="2">Indígena</option>
                    <option value="3">Pcd</option>
                </select>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        AUTODECLARAÇÃO ÉTNICO-RACIAL: Declaro para o fim específico de atender ao edital do Processo
                        Seletivo
                        Simplificado nº 01/2023 da Fundação Estatal de Atenção à Saúde - Feas, ser negro(a) de cor
                        preta ou
                        parda/indígena e assumo a opção de concorrer às vagas por meio do Sistema de Cotas para
                        população
                        negra
                        ou povos indígenas, de acordo com o disposto na Lei nº 15.931/2021 c/c o disposto no Decreto
                        Municipal
                        nº 230/2022. As informações prestadas nesta declaração são de minha inteira
                        responsabilidade,
                        estando
                        ciente que poderei responder criminalmente no caso de falsidade.
                    </label>
                    <p class="mt-3">*Obrigatório para optantes por reserva de vaga para negros ou indígenas.</p>
                </div>
                <h2>Cópia dos documentos</h2>
                <h5>Limite total dos arquivos: 5MB</h5>
                <h5>Formatos aceitos: JPG, JPEF, PNG, PDF e ZIP</h5>
                <div class="mb-3">
                    <label for="form-copia-documento-1" class="form-label">Documento 1:</label>
                    <input type="file" class="form-control" id="form-copia-documento-1">
                </div>
                <div class="mb-3">
                    <label for="form-copia-documento-2" class="form-label">Documento 2:</label>
                    <input type="file" class="form-control" id="form-copia-documento-2">
                </div>
                <div class="mb-3">
                    <label for="form-curriculo" class="form-label">Cúrriculo:</label>
                    <input type="file" class="form-control" id="form-curriculo">
                </div>
                <div class="mb-3">
                    <label for="form-copia-certificados" class="form-label">Certificados (arquivo
                        único):</label>
                    <input type="file" class="form-control" id="form-copia-certificados">
                </div>
                <input class="btn btn-primary enviar-btn" name="enviar" type="submit" value="Enviar">
            </form>
        </div>
    </main>

    <?php
    include "cadastro-usuario.php";
    ?>

    <script src="js/script.js"></script>
</body>

</html>
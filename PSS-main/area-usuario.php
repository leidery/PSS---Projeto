<?php
session_start();

// if (isset($_GET['logout'])) {
//     session_unset(); // Limpa os dados da sessão
//     session_destroy();
//     $_SESSION = array(); // Limpa os dados da sessão do array global $_SESSION
//     header('location: entrar.php?logged_out=true');
//     exit();
// }

if (!isset($_SESSION['login'])) {
    header('location: entrar.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>

<body class="body-area-usuario">
    
    <?php
    include "nav-lateral.php";
    ?>

    <nav>
        <div id="search-container">
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
            <form>
                <input type="search" id="search" placeholder="Pesquisar">
            </form>
        </div>
    </nav>

    <main class="main">
        <section class="grid-pss">
            <div class="card-estilo-1">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h4 class="card-title">Processo Seletivo Simplificado Paranaguá<br>2024</h4>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 01/2023 Upa 24h
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>08/05/2023 às 10h10min</p>
                </div>
            </div>
            <div class="card-estilo-2">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Ponta Grossa</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 06/2023 Hospital Regional
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>18/06/2023 às 12h00min</p>
                </div>
            </div>
            <div class="card-estilo-1">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">: Processo Seletivo Simplificado Maringá<br>2024</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 12/2023 Unidade Básica Saúde Internorter
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>15/03/2023 às 09h30min</p>
                </div>
            </div>
            <div class="card-estilo-2">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Matinhos</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 04/2023 Unidade Básica de Saúde Riviera
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>04/09/2023 às 15h50min</p>
                </div>
            </div>
            <div class="card-estilo-1">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Guaratuba<br>2024</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 08/2023 Unidade Básica De Saúde Figueira
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>01/02/2023 às 14h00min</p>
                </div>
            </div>
            <div class="card-estilo-2">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Curitiba</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 11/2023 Unidades de Pronto Atendimento
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>28/04/2023 às 13h20min</p>
                </div>
            </div>
            <div class="card-estilo-1">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Curitiba<br>2024</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital de Abertura nº 03/2023 Central de Atendimento Móvel
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>31/05/2023 às 17h30min</p>
                </div>
            </div>
            <div class="card-estilo-2">
                <img src="img/zero02.png" class="card-img-top" alt="PSS Fácil">
                <div class="card-body">
                    <h5 class="card-title">Processo Seletivo Simplificado Paranaguá</h5>
                    <a href="formulario.php" class="cards-texto-pss">
                        <p class="card-text">
                            Edital nº 03/2023 Unidades de Pronto Atendimento
                        </p>
                    </a>
                    <p>Publicado</p>
                    <p>09/07/2023 às 11h00min</p>
                </div>
            </div>
        </section>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
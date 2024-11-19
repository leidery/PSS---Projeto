<?php

session_start();

include "conn.php";

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

if (isset($_SESSION['login'])) {
    $consulta_dados = $conn->prepare('SELECT * FROM `tb_empregador` WHERE id_empregador = :pId_empregador');
    $consulta_dados->bindValue(':pId_empregador', $_SESSION['login']);
    $consulta_dados->execute();
    $row_dados = $consulta_dados->fetch();
}

if (isset($_POST['criar-edital'])) {
    $titulo_edital = $_POST['titulo-edital'];
    $texto_edital = $_POST['text-edital'];

    $gravar = $conn->prepare('INSERT INTO `empregador_editais` (`id_empregador`, `conteudo_edital`, `titulo_edital`) 
                                                              VALUES (:pId_empregador, :pConteudo_edital, :pTitulo_edital)');
    $gravar->bindValue(':pId_empregador', $_SESSION['login']);
    $gravar->bindValue(':pTitulo_edital', $titulo_edital);
    $gravar->bindValue(':pConteudo_edital', $texto_edital);
    $gravar->execute();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>

<body class="body-area-empregador">

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
            <h1>Adicionar Novo Edital</h1>
            <form action="" method="POST">
                <label for="titulo-edital">Título do Edital:</label>
                <input type="text" id="titulo-edital" name="titulo-edital" required><br><br>

                <label for="text-edital">Texto do Edital:</label>
                <textarea id="text-edital" name="text-edital" required></textarea><br><br>

                <button type="submit" name="criar-edital">Criar Edital</button>
            </form>
        </section>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
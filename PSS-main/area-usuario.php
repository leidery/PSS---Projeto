<?php
session_start();

include "conn.php";

// Se não estiver logado, é redirecionado para login.
if (!isset($_SESSION['login'])) {
    header('location: entrar.php');
    exit();
}

// Recupera os dados do usuário logado.
if (isset($_SESSION['login'])) {
    $consulta_dados = $conn->prepare('SELECT * FROM `tb_usuario` WHERE id_usuario = :pId_usuario');
    $consulta_dados->bindValue(':pId_usuario', $_SESSION['login']);
    $consulta_dados->execute();
    $row_dados = $consulta_dados->fetch();
}

// Verificar se há uma pesquisa
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Modificar a consulta para considerar a pesquisa
if ($searchTerm) {
    // A consulta inclui o filtro de pesquisa para título e conteúdo do edital
    $exibir_editais = $conn->prepare("SELECT * FROM empregador_editais WHERE titulo_edital LIKE :searchTerm OR conteudo_edital LIKE :searchTerm");
    $exibir_editais->bindValue(':searchTerm', '%' . $searchTerm . '%');
} else {
    // Caso não haja pesquisa, retorna todos os editais
    $exibir_editais = $conn->prepare("SELECT * FROM empregador_editais");
}

$exibir_editais->execute();
$editais = $exibir_editais->fetchAll();

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
            <form method="GET" action="">
                <input type="search" id="search" name="search" placeholder="Pesquisar" value="<?php echo htmlspecialchars($searchTerm); ?>">
            </form>
        </div>
    </nav>

    <main class="main">
        <?php if (!empty($editais)): ?>
            <div class="grid-pss">
                <?php foreach ($editais as $edital): ?>
                    <div class="card-estilo-1">
                        <img src="img/zero02.png" class="card-img-top" alt="Imagem do edital">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo htmlspecialchars($edital['titulo_edital']); ?>
                            </h4>
                            <a href="formulario.php?id=<?php echo $edital['id']; ?>" class="cards-texto-pss">
                                <p class="card-text">
                                    <?php echo htmlspecialchars($edital['conteudo_edital']); ?>
                                </p>
                            </a>
                            <p>Publicado</p>
                            <p><?php echo date('d/m/Y \à\s H\hi\m\i\n', strtotime($edital['data'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Você ainda não cadastrou nenhum edital.</p>
        <?php endif; ?>
        </section>
        </section>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
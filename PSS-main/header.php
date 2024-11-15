
<?php

if (isset($_GET['logout'])) {

    // Inicializa a sessão.
    session_start();

    // Apaga todas as variáveis da sessão
    $_SESSION = array();

    // if (ini_get("session.use_cookies")) {
    //     $params = session_get_cookie_params();
    //     setcookie(session_name(), '', time() - 42000,
    //         $params["path"], $params["domain"],
    //         $params["secure"], $params["httponly"]
    //     );
    // }

    // Por último, destrói a sessão
    session_destroy();

/*
    session_unset(); // Limpa os dados da sessão
    session_destroy();
    $_SESSION = array(); // Limpa os dados da sessão do array global $_SESSION
    header('location: entrar.php');
    exit();
    
*/
}

?>
<header class="header">
    <nav class="navbar">
        <h2>
            <a href="index.php"><img src="img/logo-final.png" class="navbar-logo" alt="PSS Fácil"></a>
        </h2>
        <ul class="nav-menu">
            <li class="nav-item"><a href="quem-somos.php" class="nav-link">Quem somos</a></li>
            <li class="nav-item"><a href="editais.php" class="nav-link">Editais</a></li>
            <li class="nav-item"><a href="contatos.php" class="nav-link">Contato</a></li>
            <li class="nav-item"><a href="entrar.php" class="nav-link">Entrar</a></li>
        </ul>
        <div class="nav-mobile">
            <span class="barra"></span>
            <span class="barra"></span>
            <span class="barra"></span>
        </div>
    </nav>
</header>
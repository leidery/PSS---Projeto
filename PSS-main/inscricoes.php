<!DOCTYPE html>
<html lang="en">

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
        <h1 class="em-breve">Em breve...</h1>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
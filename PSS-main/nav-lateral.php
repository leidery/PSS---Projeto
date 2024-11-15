<aside class="sidebar">
    <header class="sidebar-header">
        <a href="area-usuario.php">
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
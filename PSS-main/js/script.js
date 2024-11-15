function toggleMenu() {
    const menuMobile = document.getElementById("menu-mobile");

    if (menuMobile.className == "menu-mobile-active") {
        menuMobile.className = "menu-mobile";
    } else {
        menuMobile.className = "menu-mobile-active";
    }
}

document.getElementById("homeBtn").onclick = function irParaHome() {
    location.href = "area-usuario.php";
};

document.getElementById("cadastroBtn").onclick = function irParaCadastro() {
    location.href = "cadastro.php";
};

document.getElementById("inscricoesBtn").onclick = function irParaInscricoes() {
    location.href = "inscricoes.php";
};
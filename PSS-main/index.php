<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>

</html>

<body>

    <!-- Header começo -->
    <?php
    include "header.php";
    ?>
    <!-- Header fim -->

    <!-- Main começo -->
    <main>
        <div class="container-fluid">
            <!-- Carrossel começo -->
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="1"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/pss-carousel-1" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/pss-carousel-2" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/pss-carousel-3" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </a>
            </div>
            <!-- Carrossel fim -->

            <!-- Informações começo -->
            <div id="info-area">
                <div id="info-container">
                    <div class="row">
                        <div class="col-12">
                            <h2 id="infomacoes">Informações</h2>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="img/pss-em-aberto.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="cards-titulo">PSS abertos</a></h5>
                                    <a href="#" class="cards-texto">
                                        <p class="card-text">
                                            Nesta seção você poderá obter informações sobre os processos seletivos com
                                            inscrições abertas e às vagas disponíveis. Nesta sessão, apresenta o acesso
                                            rápido. Poderá consultar à lista completa das oportunidades atualmente em
                                            aberto, é possível filtrar as vagas por cidade, região e até mesmo pelo tipo
                                            de contratação.Acesse e confira.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="img/pss-em-andamento.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="cards-titulo">PSS em andamento</a></h5>
                                    <a href="#" class="cards-texto">
                                        <p class="card-text">
                                            Nesta seção, você terá acesso a uma lista abrangente dos processos seletivos
                                            em curso. Nossas vagas são atualizadas regularmente, garantindo que você
                                            tenha acesso às últimas oportunidades disponíveis. Se você está em busca de
                                            uma nova oportunidade profissional, explore nossa lista de processos
                                            seletivos em andamento.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="img/pss-proximos.png" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="cards-titulo">PSS futuros ou próximos</a>
                                    </h5>
                                    <a href="#" class="cards-texto">
                                        <p class="card-text">
                                            Nesta seção você poderá acompanhar os processos seletivos previstos e
                                            conhecer as informações detalhadas sobre as seleções, incluindo as vagas
                                            disponíveis, os requisitos do trabalho e as habilidades necessárias para ser
                                            considerado para a posição. Acesse o link acima para obter informações sobre
                                            processos seletivos previstos ou com inscrições abertas próximas.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Informações fim -->

            <!-- Contato começo -->
            <?php
            include "area-contato.php"
            ?>
            <!-- Contato fim -->
    </main>
    <!-- Main fim -->

    <!-- Footer começo -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer fim -->

    <script src="js/script.js"></script>
</body>

</html>
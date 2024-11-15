<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset(); // Limpa os dados da sessão
    session_destroy();
    $_SESSION = array(); // Limpa os dados da sessão do array global $_SESSION
    header('location: entrar.php?logged_out=true');
    exit();
}

// if (!isset($_SESSION['login'])) {
//     header('location: entrar.php');
//     exit();
// }

?>

<!DOCTYPE html>

<html>

<?php
include "headHTML.php"
?>

<body>
    <!-- Header começo -->
    <?php
    include "header.php";
    ?>
    <!-- Header fim -->

    <main>
        </br>
        </br>
        </br>
        </br>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="text-justify">
                        <p class="fs-3" style="text-align: center; margin-top: 100px;">
                            Em breve nessa página você terá acesso a várias
                            oportunidades de PSS.
                    </div>
                </div>
            </div>
        </div>

        <!-- Ainda com dúvidas começo -->
        <?php
        include "ainda-duvidas.php";
        ?>
        <!-- Ainda com dúvidas fim -->
        
    </main>

    <!-- Footer começo -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer fim -->
</body>

</html>
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
        <div class="container-fluid mt-4">
            <div class="row align-items-center mt-4">
                <div class="col-md-10 mx-auto col-lg-5" id="card-criar">
                    <?php
                    include "login.php";
                    ?>
                </div>

                <!-- Ainda com dúvidas começo -->
                <?php
                include "ainda-duvidas.php";
                ?>
                <!-- Ainda com dúvidas fim -->
            </div>
        </div>
    </main>

    <!-- Footer começo -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer fim -->
</body>

</html>
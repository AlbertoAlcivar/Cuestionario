<?php
require ('template/header.php');
?>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-12">
            <html lang="es">
            <?php
            //require ("header.php");
            @$msg = $_REQUEST['msg'];
            ?>
            <body>
            <div class="container">

                <H1><?php echo utf8_decode($titulo)?></h1>
                <p><?php echo utf8_decode($cont) ?></p>
                <center>
                    <?php
                    $preguntas = new preguntas();
                    $preguntas->cuestionario();
                    ?>
                </center>

            </div><!-- /container -->
            </body>
            </html><br>
        </div></div>
    <?php
    require ('template/footer.php');
    ?>
</div>

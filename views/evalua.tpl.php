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

                <H1><?php echo $titulo?></h1>
                <p><?php echo $contenido ?></p>
                <center>
                    <?php
                    $y = 1;
                    $cal = 0;
                    for ($y;$y<11;$y++)
                    {
                        if ($_REQUEST['resp'.$y] == $_REQUEST['true'.$y])
                        {
                            $cal += 1;
                        }
                    }
                    require('control/base.php');
                    $base->consulta('Select * from usuario where idu = "' . $idu . '"');
                    $nombre = mysql_result($base->Consulta_ID,0,'nombre');
                    $cal_anterior = mysql_result($base->Consulta_ID,0,'calif');
                    If ($cal_anterior < $cal)
                    {
                        echo utf8_decode("FELICIDADES $nombre!, haz mejorado tu calificación!");
                        echo '<br>';
                        echo utf8_decode("Ahora tu calificación es: $cal");
                        echo '<br>';
                        $base->consulta('UPDATE usuario SET calif="' . $cal . '" where idu="' . $idu . '"');
                    }
                    else
                    {
                        echo utf8_decode("Buen intento $nombre!, pero tu calificación no mejoró");
                        echo '<br>';
                        echo utf8_decode("Tu calificación: $cal");
                        echo '<br>';
                        echo utf8_decode("Tu mejor puntaje: $cal_anterior");
                    }
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

<?php
class preguntas {
    public function cuestionario(){
        echo "
        </center>
        <br>
        <center>";
    require ('./control/base.php');
    echo "
    <div class=table-resposive>
    <form action='index.php' method='post' name='evalua' id='evalua'>
    <table class='table table-bordered table table-striped'>
    <tr><th>Pregunta</th><th>Respuesta</th>";

        $base->consulta("SELECT * FROM preguntas ORDER BY RAND() LIMIT 0,10");
    $ciclo = mysql_num_rows($base->Consulta_ID);
    for ($y=0;$y<$ciclo;$y++)
    {
        $num = $y+1;
        $pregunta = mysql_result($base->Consulta_ID,$y,'pregunta');
        $true = mysql_result($base->Consulta_ID,$y,'respuesta');
        echo "<tr><td>$pregunta</td><td><input type='radio' name='resp$num' value=1>Cierto  <input type='radio' name='resp$num' value=2>Falso
        <input type='hidden' name='true$num' value='$true'></td>";
    }
        echo "<tr><td colspan='3' align='center'><input class='btn btn-default' type='submit' name='submit' value='Calificar'></td></tr>";
        echo"</table>";
        echo "<input type='hidden' name='url' value='evalua'>";
        echo"</form>";
        echo "</div>";
    }

    public function tabla(){
        echo "
        </center>
        <br>
        <center>";
        require ('./control/base.php');
        echo "
    <div class=col-lg-4 class=form-signin role=form>";
        $base->consulta('SELECT * FROM usuario ORDER BY calif DESC');

        for ($y=0;$y<3;$y++)
        {
            if ($y == 0)
            {
                $lugar = 'Primer lugar';
            }
            if ($y == 1)
            {
                $lugar = 'Segundo lugar';
            }
            if ($y == 2)
            {
                $lugar = 'Tercer lugar';
            }
            if ($_COOKIE['idu'] == mysql_result($base->Consulta_ID,$y,'idu'))
            {
                $nombre = mysql_result($base->Consulta_ID,$y,'nombre');
                echo "FELICIDADES $nombre! Tu eres $lugar! <br><br>";
            }
        }

        for ($y=0;$y<3;$y++)
        {
            if ($y == 0)
            {
                $lugar = 'Primer lugar';
            }
            if ($y == 1)
            {
                $lugar = 'Segundo lugar';
            }
            if ($y == 2)
            {
                $lugar = 'Tercer lugar';
            }
            echo "<div class=table-resposive>
    <form action='index.php' method='post' name='evalua' id='evalua'>";
            echo "<table class='table table-bordered table table-striped'><tr><th>$lugar</th> <th>" . utf8_decode('Calificación') . "</th>";
            $nombre = mysql_result($base->Consulta_ID,$y,'nombre') . " " . mysql_result($base->Consulta_ID,$y,'ap_pat');
            $calif = mysql_result($base->Consulta_ID,$y,'calif');
            echo "<tr><td>$nombre</td><td>$calif</td></tr>";
            echo"</table><br>";
        }
        echo"</form>";
        echo "</div></div>";
    }

}
<?php
$idu = $_COOKIE['idu'];
require('base.php');
$base->consulta('Select * from usuario where idu = "' . $idu . '"');
$nombre = mysql_result($base->Consulta_ID,0,'nombre') . " " . mysql_result($base->Consulta_ID,0,'ap_pat');
$titulo	= 'Bienvenido(a) '. $nombre;
$cont = 'Realiza tu examen contestando todas las preguntas.';
$variables = array('titulo'=>$titulo,'cont'=>$cont);
view($_GET['url'],$variables);
<?php
$idu = $_COOKIE['idu'];
require('base.php');
$base->consulta('Select * from usuario where idu = "' . $idu . '"');
$nombre = mysql_result($base->Consulta_ID,0,'ap_pat') . " " . mysql_result($base->Consulta_ID,0,'nombre');
$titulo	= 'Página de mejores puntajes. ';
$cont = 'Aquí puedes ver la tabla de mejores puntajes';
$variables = array('titulo'=>$titulo,'cont'=>$cont);
view($_GET['url'],$variables);
<?php
require('helpers.php');
require('clases/preguntas.php');
echo "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />";
if(empty($_REQUEST['url']))
{
    $_REQUEST['url'] = 'logg';
}
controller($_REQUEST['url']);
?>
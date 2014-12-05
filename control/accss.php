<?php
$psw=$_REQUEST['psw'];
$user=$_REQUEST['user'];
if ($user == "" or $psw == "")
{
    $msg="";
    Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
require("base.php");
$base->consulta("SELECT * from usuario where usuario=\"" . mysql_real_escape_string($user) . "\" AND pss= \"" . mysql_real_escape_string($psw) . "\"");
$cuantos=mysql_num_rows($base->Consulta_ID);
if($cuantos>0) {

    $idu = mysql_result($base->Consulta_ID, 0, 'idu');
    $activo = mysql_result($base->Consulta_ID, 0, 'activo');
    if ($activo == '2') {
        $msg = "El usuario no esta activo, consulte al administrador";
        Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
    } else {
        Print"<meta http-equiv='refresh' content='0;
url=index.php?url=identi&idu=$idu'>";
    }

}
else{
    $msg="El usuario o password son incorrectos";
    Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
?>
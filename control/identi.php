<?php
$idu=$_REQUEST['idu'];
if ($idu=="")
{
    $msg="";
    Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
else
{
    setCookie('idu',$idu);
    setCookie('acceso',1);
    Print"<meta http-equiv='refresh' content='0;
url=index.php?url=preguntas'>";
}
?>
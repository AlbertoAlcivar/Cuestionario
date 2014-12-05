<?php
$BD="cuestion";
$HOST="localhost";
$USER="root";
$PASS="";
include_once("./BaseDatos/mysql.php");
$base = new DB_mysql;
$base->conectar("$BD", "$HOST", "$USER", "$PASS");
<?php
$nome= $_POST ["nome"];

$host = "localhost";
$usuario = "root";
$senha = "";

$banco = mysql_connect($host,$usuario,$senha) or die("Não foi possivel conectar ao banco");
mysql_select_db("imei",$banco) or die("não foi possivel encontrar esse banco");

?>
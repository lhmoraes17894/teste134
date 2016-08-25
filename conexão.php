<?php
$nome= $_POST ["nome"];

$hostname_config1 = "localhost";
$database_config1 = "nome";
$username_config1 = "root";
$password_config1 = "";
$config1 = mysql_pconnect($hostname_config1, $username_config1, $password_config1) or trigger_error(mysql_error(),E_USER_ERROR)

?>
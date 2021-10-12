<?php
$database_server = "134.0.116.43";
$database_type = 'mysql'; 
$database_user = 'luks';
$database_password = '!Ab123456';
$database_connection_charset = 'utf8';
$database_connection_method = 'SET NAMES';
$dbase = 'webdriver';


if(!$db_kashtan = mysql_connect($database_server, $database_user, $database_password)) {
	echo "Ошибка подключения к бд";
	exit();
}
mysql_select_db($dbase, $db_kashtan);
mysql_set_charset("cp1251", $db_kashtan);

?>
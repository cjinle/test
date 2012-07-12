<?php
/**
 * 数据库连接信息
 */

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'mall';
$charset = 'utf8';

$con = mysql_connect($db_host, $db_user, $db_pwd) or die ('Connect database failure!');
mysql_select_db($db_name, $con);
$sql = "SET NAMES $charset";
mysql_query($sql);



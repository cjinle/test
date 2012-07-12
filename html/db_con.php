<?php
/**
 * db connent common file.
 * @author Lok 2012-05-31
 */
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'test';
$charset = 'utf8';

$con = mysql_connect($db_host, $db_user, $db_pwd) or die ('Connect database failure!');
mysql_select_db($db_name, $con);
$sql = "SET NAMES $charset";
mysql_query($sql);


/**
 * 获取单个字段的值
 * @param string $sql
 * @return mixed
 */
function get_one($sql) {
	if (strlen($sql) > 0) {
		$result = mysql_query($sql);
		$row = mysql_fetch_row($result);
		return $row[0];
	} else {
		return 'SQL Error!';
	}
}

/**
 * 获取SQL一行的数值
 * @param string $sql
 * @return array
 */
function get_row($sql) {
	if (strlen($sql) > 0) {
		$result = mysql_query($sql);
		return mysql_fetch_row($result);
	} else {
		echo 'SQL Error!';
	}
}

/**
 * 获取SQL所有的值
 * @param string $sql
 * @return array
 */
function get_all($sql) {
	if (strlen($sql) > 0) {
		$result = mysql_query($sql);
		$return_arr = array();
		while ($row = mysql_fetch_row($result)) {
			$return_arr[] = $row;
		}
		return $return_arr;
	} else {
		echo 'SQL Error!';
	}
}


?>
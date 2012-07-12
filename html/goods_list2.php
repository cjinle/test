<?php
/**
 * 产品分类列表页处理脚本
 * @author Lok Fri Jun 08 15:00:32 CST 2012
 */
 
require('db_con.php');
include('simple_html_dom.php');

error_reporting(E_ALL);


$sql = "SELECT id, PageUrl FROM goods_list_a_1 WHERE updated=0 LIMIT 400";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
	$id = $row[0];
	$PageUrl = $row[1];
	$s_sql = "SELECT content FROM goods_list WHERE PageUrl='$PageUrl' AND updated=1 LIMIT 1";
	$content = get_one($s_sql);
	
	$html = str_get_html($content);
	
	foreach ($html->find('table#productTable') as $table) {
		$tmp_th = array();
		foreach ($table->find('tr') as $tr) {
			foreach ($tr->find('th') as $th) {
				$tmp_th[] = $th->innertext;
			}

		}
		$tmp_th_str = serialize($tmp_th);
		$tmp_th_str = addslashes($tmp_th_str);
		
	}
	$u_sql = "UPDATE goods_list_a_1 SET _key='$tmp_th_str', updated=1 WHERE id='$id' LIMIT 1";
	mysql_query($u_sql);
	echo 'ID ' . $id . ': done! ' . "\n";
}


exit;

$sql = "SELECT ID, title, content, PageUrl FROM goods_list WHERE updated=1 LIMIT 50";
//echo $sql;exit;


$goods_list = get_all($sql);

foreach ($goods_list as $val) {
	
	//var_dump($val[2]);exit;
	$ID = intval($val[0]);
	$PageUrl = trim($val[3]);
	$html = str_get_html($val[2]);
	
	foreach ($html->find('table#productTable') as $table) {
		$tmp_th = array();
		foreach ($table->find('tr') as $tr) {
			foreach ($tr->find('th') as $th) {
				$tmp_th[] = $th->innertext;
			}

		}
		$tmp_th_str = serialize($tmp_th);
		
		$updated_sql = "UPDATE goods_list SET updated=5 WHERE ID=" . $ID;
		mysql_query($updated_sql);
		
		$tmp_th_str = addslashes($tmp_th_str);
		
	
		$sql = "INSERT INTO goods_list_a_1 (_cat, _key, _value, PageUrl) VALUES " . 
			   " ('$cat_arr_str', '$tmp_th_str', '$tmp_td_str', '$PageUrl')";
//		echo $sql;
		
		echo $ID . ': done! ' . "\n";
		mysql_query($sql);

	}
}
echo '@done!';

exit;



 
 
?>
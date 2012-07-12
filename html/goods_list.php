<?php
/**
 * 产品分类列表页处理脚本
 * @author Lok Fri Jun 08 15:00:32 CST 2012
 */
 
require('db_con.php');
include('simple_html_dom.php');

error_reporting(E_ALL);

$sql = "SELECT ID, title, content, PageUrl FROM goods_list WHERE updated=0 LIMIT 50";
//echo $sql;exit;


$goods_list = get_all($sql);

foreach ($goods_list as $val) {
	
	//var_dump($val[2]);exit;
	$ID = intval($val[0]);
	$PageUrl = trim($val[3]);
	$html = str_get_html($val[2]);
	$cat_arr = array();
	foreach ($html->find('h1.seohtagbold') as $h1) {
		$cat_arr[] = $h1->innertext;
	}
	$cat_arr_str = serialize($cat_arr);
	
	$tmp_th = array();
	
	foreach ($html->find('table#productTable') as $table) {
		$tmp_td = array();
		$key = 0;
		foreach ($table->find('tr') as $tr) {
			foreach ($tr->find('th') as $th) {
				$tmp_th[] = $th->innertext;
			}

			foreach ($tr->find('td') as $td) {
				$tmp_td[$key][] = $td->innertext;
			}
			$key++;
		}
		$tmp_th_str = serialize($tmp_th);
		$tmp_td_str = serialize($tmp_td);
		
		$updated_sql = "UPDATE goods_list SET updated=1 WHERE ID=" . $ID;
		mysql_query($updated_sql);
		
		echo 'cat_arr done, ';
		
		$cat_arr_str = addslashes($cat_arr_str);
		$tmp_th_str = addslashes($tmp_th_str);
		$tmp_td_str = addslashes($tmp_td_str);
		
	
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
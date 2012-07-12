<?php
/**
 * 提取分类多字段过滤的字段
 * @author Lok 2012/6/7
 */

require('db_con.php');
include('simple_html_dom.php');

$sql = "SELECT cat_id, content FROM cat_content WHERE is_muti_fields=1 AND filter_fields_updated=0 LIMIT 2";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
	$cat_id = intval($row[0]);
	$content = trim($row[1]);
	
	$html = str_get_html($content);

	if (is_object($html)) {

		
		
		
		
		
		
		
//		foreach ($html->find('form[action="/scripts/dksearch/dksus.dll"]') as $form) {
//			if (is_object($form)) {
//				$filter_fields = array();
//				foreach ($form->find('th') as $th) {
//					$filter_fields[] = $th->innertext;
//				}
//				$filter_fields_str = serialize($filter_fields);
////				echo $filter_fields_str;
//				$u_sql = "UPDATE cat_content SET filter_fields='$filter_fields_str', filter_fields_updated=1 WHERE cat_id='$cat_id' LIMIT 1";
//				
//				echo $u_sql;
//				echo 'cat_id: ' . $cat_id . ' done! <br />';
//				mysql_query($u_sql);
//			} else {
//				echo '$form is not an object!';
//			}
//		}
	} else {
		echo '$html is not an object!';
	}
	
	
	
}







?>
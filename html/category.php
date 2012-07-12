<?php
/**
 * 采集的分类数据处理
 * @author Lok 2012/6/5
 */
error_reporting(E_ALL);

require('db_con.php');
include('simple_html_dom.php');



//$sql = "SELECT ID,content FROM cat WHERE ID=243";
//$sql = "SELECT ID,content FROM cat WHERE ID=244";
//$sql = "SELECT ID,content FROM cat WHERE PageUrl like '%/product-search/zh/optical-inspection-equipment/arms-mounts-stands/4064400%'";
$sql = "SELECT cat_id,content FROM cat_content WHERE p_id > 0 AND is_muti_fields=1 LIMIT 100,5";

$result = mysql_query($sql);

while ($row = mysql_fetch_row($result)) {
	
//	var_dump($row);
	
	$html = str_get_html($row[1]);

	if (is_object($html)) {

		foreach ($html->find('form[action="/scripts/dksearch/dksus.dll"]') as $form) {
			if (is_object($form)) {
				foreach ($form->find('th') as $th) {
					echo $th->innertext . '|';
				}
			} else {
				echo '$form is not an object!';
			}
		}
	} else {
		echo '$html is not an object!';
	}
	echo '<br />';
	



	
	
//	
//	foreach ($html->find('table#productTable') as $table) {
//		
//		
//		
//		foreach ($table->find('tr') as $tr) {
//			foreach ($tr->find('th') as $th) {
//				echo $th->innertext . '|';
//			}
//			echo "\n";
//			echo '-------------';
//			echo "\n";
//			foreach ($tr->find('td') as $td) {
//				echo $td->innertext . '||';
//			}
//		}
//	}
	
	
	
}




/**
 * 解释HTML字符串
 *
 * @param string $html
 */
function sep($html) {
	
}


?>
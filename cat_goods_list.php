<?php
/**
 * 根据cat_content的page_count生成所有的分类的url
 * @author Lok Thu Jun 07 15:34:24 CST 2012
 */

require('html/db_con.php');

$sql = "SELECT cat_id, page_count, url FROM cat_content WHERE p_id > 0";
$result = mysql_query($sql);

while ($row = mysql_fetch_row($result)) {
	$cat_id = intval($row[0]);
	$page_count = intval($row[1]);
	$url = trim($row[2]);
	
	$i_sql = "INSERT INTO cat_goods_list (cat_id, url) VALUES ('$cat_id', '$url')";
	mysql_query($i_sql);
	
	if ($page_count > 0) {
		for ($i = 2; $i <= $page_count; $i++) {
			$url2 = $url . '/page/' . $i;
			$i_sql2 = "INSERT INTO cat_goods_list (cat_id, url) VALUES ('$cat_id', '$url2')";
			mysql_query($i_sql2);
		}
	}
	
	echo 'cat_id ' . $cat_id . ' done! <br />';
}

echo 'done!';





?>


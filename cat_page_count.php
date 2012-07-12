<?php
/**
 * 提取分类的分页数
 * @author Lok Thu Jun 07 13:59:51 CST 2012
 */

require('html/db_con.php');
//$html = '<a href="/product-search/zh/sensors-transducers/lvdts-linear-variable-differential-transformer/1966540/page/x">最后一个</a>';



$sql = "SELECT cat_id, content FROM cat_content WHERE p_id > 0 ";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
	$cat_id = intval($row[0]);
	$content = trim($row[1]);
	
//	var_dump($content);
	
	preg_match_all("/<a\ href=\"\/product\-search\/zh\/[a-z\-]+\/[a-z\-]+\/\d+\/page\/(\d+)\"\>最后一个\<\/a\>/i", $content, $out);
	
//	var_dump($out[1]);
	
	$page_count = intval($out[1][1]);
	$u_sql = "UPDATE cat_content SET page_count='$page_count' WHERE cat_id='$cat_id' LIMIT 1";
	mysql_query($u_sql);
	echo 'cat_id: ' . $cat_id . ' page count is ' . $page_count . '<br />';
	
}

echo 'done!';






//if (preg_match("/<a\ href=\"\/product\-search\/zh\/sensors\-transducers\/[a-z\-]+\/[0-9]+\/page\/[0-9]\"\>最后一个\<\/a\>/i", $html)) {
//	echo "match!";
//} else {
//	echo "not match!";
//}





?>
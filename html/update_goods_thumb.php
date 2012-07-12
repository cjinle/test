<?php
/**
 *  修改商品缩略图
 * @author Lok Mon Jun 11 17:58:55 CST 2012
 */
 
require('db_con.php');

$sql = "SELECT goods_id,goods_thumb FROM ecs_goods WHERE 1 AND updated=0 LIMIT 1000";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
	$goods_id = $row[0];
	$goods_thumb = $row[1];
	$goods_thumb = preg_replace("/\<img([^\>]+)src=\"([^\>\"]+)\"([^\>]+)\>/i", "\$2", $goods_thumb);
	
	$u_sql = "UPDATE ecs_goods SET goods_thumb='$goods_thumb', updated=1 WHERE goods_id='$goods_id' LIMIT 1";
	echo $u_sql."\n";
	mysql_query($u_sql);
	
}
echo '@done.' . "\n";
 
 
?>
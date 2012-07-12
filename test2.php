<?php
require('html/db_con.php');

class Hello {
    function func() {
        echo "hello func";
    }
}

$obj0 = new Hello();

$new_obj = 'obj' . '0';


$$new_obj->func();

//
//$url = 'http://holy2010.blog.51cto.com/1086044/365365?%E9%99%88%E8%BF%9B%E4%B9%90';
//echo "encode" . urlencode($url) . "<br />";
//echo "decode" . urldecode($url) . "<br />";
//
//
//$sql = "SELECT url, content FROM cat_content WHERE is_muti_fields=1 LIMIT 10";
////$sql = "SELECT count(url)FROM cat_content WHERE is_muti_fields=0";
//$result = mysql_query($sql);
//while ($row = mysql_fetch_row($result)) {
//	var_dump($row);
//}
//exit;
//

// 过滤该分类下是否存在多字段？ 
//
//$sql = "SELECT cat_id, content FROM cat_content WHERE p_id > 0 AND is_muti_fields=3 LIMIT 100";
//$result = mysql_query($sql);
//while ($row = mysql_fetch_row($result)) {
//	if (preg_match("/\"\/scripts\/dksearch\/dksus.dll\"/i", $row[1])) {
//		$flag = 1;
//	} else {
//		$flag = 0;
//	}
//	$u_sql = "UPDATE cat_content SET is_muti_fields='$flag' WHERE cat_id='$row[0]'";
//	echo $u_sql . ' done ! <br />';
//	mysql_query($u_sql);
//}
//



?>

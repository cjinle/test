<?php

require('../connect.php');

mysql_select_db('icmall', $con);
//mysql_query("SET NAMES GBK");
$sql = "SELECT cat_id, cat_name, ext_fields FROM ecs_category WHERE 1 LIMIT 20";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
//    var_dump($row);exit;
    var_dump($row[2]);
    $ext_fields = unserialize($row[2]);
    var_dump($ext_fields);
//    $str = implode('|', $ext_fields);
//    echo $row[1] . "({$row[0]}) : " . $str . "\n";
}



?>

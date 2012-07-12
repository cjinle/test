<?php
/**
 * 把扩展字段加到ecs_goods表中
 * 2012-07-05
 */

require('../connect.php');

mysql_select_db('icmall', $con);

$start = 0;
$end = 2400;
$limit = 1000;
$last_id = 0;

for ($i = $start; $i < $end; $i++) {
    $sql = "SELECT goods_id FROM ecs_goods WHERE 1 AND goods_id > $last_id LIMIT $limit";
    //echo $sql;exit;
    $result = mysql_query($sql);
    while ($row = mysql_fetch_row($result)) {
        $goods_id = intval($row[0]);
        $table_name = 'ecs_goods_ext_fields' . substr($goods_id, -1);
        $sql2 = "SELECT * FROM ${table_name} WHERE goods_id='$goods_id'";
        $result2 = mysql_query($sql2);
        $arr = array();
        while ($row2 = mysql_fetch_row($result2)) {
            $arr[] = $row2;
        }
        $arr_str = addslashes(serialize($arr));
        $u_sql = "UPDATE ecs_goods SET ext_fields='$arr_str' WHERE goods_id='$goods_id' LIMIT 1";
//        echo $u_sql . '<br />';exit;
        mysql_query($u_sql);
        echo "update goods_id: " . $goods_id . "\n";
        $last_id = $goods_id;
    }

}








?>

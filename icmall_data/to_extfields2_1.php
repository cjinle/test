<?php
/**
 * ecs_goods_ext_fields数据转移
 * @author Lok 2012/07/02
 */

require('../connect.php');

mysql_select_db('icmall', $con);

$times = 1001;
//$times = 20000000;
//$times = 30000000;
//$times = 40000000;
//$times = 44000000;
$start = 1;
$limit = 2000;
$last_id=28000000;


for ($i = $start; $i < $times; $i++) {
    $sql = "SELECT ext_id, ext_name, goods_id, cat_id, ext_value FROM ecs_goods_ext_fields222 WHERE 1 AND ext_id > $last_id LIMIT $limit";
    //echo $sql;
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
        $ext_id = intval($row['ext_id']);
        $last_id = $ext_id;
        $goods_id = intval($row['goods_id']); 
        $ext_name = addslashes(trim($row['ext_name']));
        $ext_value = addslashes(trim($row['ext_value']));
        $cat_id = intval($row['cat_id']);
        $table_name = 'ecs_goods_ext_fields' . substr($goods_id, -1);
        $i_sql = "INSERT INTO ${table_name}(ext_id, ext_name, goods_id, cat_id, ext_value) VALUES " . 
                 " ('$ext_id', '$ext_name', '$goods_id', '$cat_id', '$ext_value') ";
        //echo $i_sql . "\n";
        echo "insert table_name: " . $table_name . ", goods_id: " . $goods_id . ", last_id: " . $last_id ."\n";
        mysql_query($i_sql);
    }

}

echo "start: " . $start . ", end: " . $times . ", last_id: " . $last_id . "\n";




?>

<?php
/**
 * 增加分类的扩展分类
 * 2012-07-06
 */

require('../connect.php');

mysql_select_db('icmall', $con);

$start = 1;
$end = 900;


for ($i = $start; $i < $end; $i++) {
    $cat_id = $i;
    $arr = array();
    for ($j = 0; $j < 10; $j++) {
        $table_name = 'ecs_goods_ext_fields' . $j;
        $sql = "SELECT ext_name FROM ${table_name} WHERE cat_id='$i' GROUP BY ext_name";
        //echo $sql . "\n";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_row($result)) {
            $arr[] = trim($row[0]);
        }
    }
    $arr = array_unique($arr);
    $arr_str = addslashes(serialize($arr));
    $u_sql = "UPDATE ecs_category SET ext_fields='$arr_str' WHERE cat_id='$i' LIMIT 1";
    //echo $u_sql . "\n";
    echo "update cat_id : " . $i . "\n";
    mysql_query($u_sql);
}





?>

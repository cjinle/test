<?php

require('../connect.php');

mysql_select_db('icmall', $con);

$start = 0;
$end = 2400;
$last_id = 0;
$limit = 1000;

for ($i = $start; $i < $end; $i++) {
    $sql = "UPDATE ecs_goods SET ext_fields='' WHERE 1 AND goods_id > ${last_id} LIMIT ${limit} ";
    $last_id += $limit;
    echo $sql . "\n";
    echo "update last_id: " . $last_id . "\n"; 
    mysql_query($sql);
}


?>

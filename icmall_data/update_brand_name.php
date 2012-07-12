<?php
require('../connect.php');

$start = 1;
$end = 10000;
$limit = 50000;

for ($i = $start; $i < $end; $i++) {
    $sql = "UPDATE tmp_goods_brand SET brand_name=(SELECT provider_name FROM ecs_goods WHERE goods_id=goods_id) WHERE count > 1 LIMIT 1000"; 

}



?>

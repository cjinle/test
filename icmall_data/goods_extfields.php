<?php
/**
 * ecs_goods_ext_fields数据转移
 * @author Lok 2012/07/02
 */

require('../connect.php');

$times = 50000;
$limit = 500;


for ($i = 0; $i < $times; $i++) {
    $next_id = get_next_id();
    $current_id = $next_id - 1;

    if ($next_id) {
        $sql = "SELECT * FROM extproperty WHERE 1 AND id > $current_id LIMIT $limit";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_row($result)) {
            $ext_id = intval($row[0]);
            $goods_id = intval($row[1]); 
            $ext_name = addslashes(trim($row[2]));
            $ext_value = addslashes(trim($row[3]);
            $cat_id = get_cat_id($goods_id);
            $u_sql = "INSERT INTO ecs_goods_ext_fields(ext_id, ext_name, goods_id, cat_id, ext_value) VALUES " . 
                     " ('$ext_id', '$ext_name', '$goods_id', '$cat_id', '$ext_value') ";
            echo "insert ext_id : " . $ext_id . "\n";
            mysql_query($u_sql);

        }
    
    }
}




/*
 * 获取下一个自增ID
 * @return integer
 */
function get_next_id() {
    $sql = "SHOW TABLE STATUS LIKE 'ecs_goods_ext_fields'";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    return $row['Auto_increment'];
}


/**
 * 获取商品分类ID
 * @param integer $goods_id
 * @return integer
 */
function get_cat_id($goods_id = 0) {
    if ($goods_id > 0) {
        $sql = "SELECT classId FROM products WHERE id='$goods_id' LIMIT 1";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        return $row[0];
    }
}


?>

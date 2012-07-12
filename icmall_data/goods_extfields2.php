<?php
/**
 * ecs_goods_ext_fields数据转移
 * @author Lok 2012/07/02
 */

require('../connect.php');

//$times = 10000000;
//$times = 20000000;
//$times = 30000000;
//$times = 40000000;
$times = 44000000;
//$start = 25300;
$start = 40000000;
//$start = 30000000;
//$start = 20000000;
//$start = 10000000;
$limit = 100;


for ($i = $start; $i < $times; $i++) {
//    $next_id = get_next_id();
//    $current_id = $next_id - 1;
    $not_exist_id = get_not_exist_id($i);
    if ($not_exist_id) {
        $sql = "SELECT * FROM extproperty WHERE 1 AND id='$not_exist_id' LIMIT 1";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_row($result)) {
            $ext_id = intval($row[0]);
            $goods_id = intval($row[1]); 
            $ext_name = addslashes(trim($row[2]));
            $ext_value = addslashes(trim($row[3]));
            $cat_id = get_cat_id($goods_id);
            $u_sql = "INSERT INTO ecs_goods_ext_fields(ext_id, ext_name, goods_id, cat_id, ext_value) VALUES " . 
                     " ('$ext_id', '$ext_name', '$goods_id', '$cat_id', '$ext_value') ";
            //echo $u_sql;exit;
            echo "insert ext_id : " . $ext_id . "\n";
            mysql_query($u_sql);

        }
    
    }
}

echo "start: " . $start . ", end: " . $times;



/**
 * 获取没有插入的ID
 * @param integer $ext_id
 * @return boolean
 */
function get_not_exist_id($ext_id = 0) {
    if ($ext_id > 0) {
        $sql = "SELECT id FROM extproperty WHERE id='$ext_id' LIMIT 1";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        $sql2 = "SELECT ext_id FROM ecs_goods_ext_fields WHERE ext_id='$ext_id' LIMIT 1";
        $result2 = mysql_query($sql2);
        $row2 = mysql_fetch_row($result2);
        //echo $row[0] . '----' . $row2[0] . "\n";
        if ($row[0] && $row2[0]) {
            return false; 
        } else {
            return $row[0];
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

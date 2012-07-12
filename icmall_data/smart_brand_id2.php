<?php
/**
 * 智能匹配品牌ID VERSION 2
 * @author Lok 2012/7/4
 */

require('../connect.php');


// 选择数据库
mysql_select_db('icmall', $con);


$start = 1;
$end = 100;
$limit = 5000;
$last_id = 1357783;
//$last_id = 341537;
//$last_id = 1;

for ($i = $start; $i < $end; $i++) {
    $sql = "SELECT goods_id,  " . 
        " AND count > 1 AND goods_id > ${last_id} LIMIT ${limit} ";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
        $goods_id = intval($row['goods_id']);
        $brand_name = trim($row['provider_name']);
        $brand_like = get_brand_like($brand_name);
        if ($brand_like['count'] == 1) {
            $u_sql = "UPDATE ecs_goods SET brand_id='$brand_like[brand_str]' WHERE goods_id='$goods_id' LIMIT 1";
            //echo $u_sql . "\n"; 
            mysql_query($u_sql);
            echo "UPDATE GOODS_ID: " . $goods_id . "\n";
        }
        $i_sql = "INSERT INTO tmp_goods_brand (goods_id, brand_str, count) VALUES ('$goods_id', '$brand_like[brand_str]', '$brand_like[count]')";
        //echo $i_sql . "\n";
        mysql_query($i_sql);
        $last_id = $goods_id;

        echo "INSERT LAST_ID: $goods_id" . "\n";
    }
    
}



/**
 * 检测是否存在匹配的品牌名
 * @param string $brand_name
 * @return array
 */
function get_brand_like($brand_name = '') {
    if (!empty($brand_name)) {
        $arr = explode(' ', $brand_name);
        $frist_word = $arr[0];
        $keyword = $arr[0] . ' ' . $arr[1];
        $return = array();
        $brands = array();
        $sql = "SELECT brand_id FROM ecs_brand WHERE brand_name like '$keyword%'";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_row($result)) {
            $brands[] = $row[0];
        }
        $count = count($brands);
        if ($count == 1) {
            $return = array('count'=>$count, 'brand_str'=>$brands[0]);
        } else {
            $return = array('count'=>$count, 'brand_str'=>implode(",", $brands));
        }
        return $return;
    }
}






?>

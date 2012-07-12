<?php
/**
 * 更新商品表信息（PDF文档，缩略图）
 * @author Lok 2012/7/4
 */

require('../connect.php'); // 包含数据库连接信息

$start = 2000000;
$end = 2400000;


//$url = "1 http://www.lok.me/sdfsdfss.sd.fs.df.sdf";
//var_dump(is_url($url));exit;

mysql_select_db('icmall', $con);

for ($i = $start; $i <= $end; $i++) {
    $sql = "SELECT goods_id, provider_name, goods_thumb, goods_img, digikey_url " . 
        " FROM ecs_goods2 WHERE goods_id='$i' lIMIT 1";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    if ($row) { // 存在此商品ID
        $goods_id = intval($row['goods_id']);
        $brand_name = addslashes(trim($row['provider_name']));
        $brand_id = get_brand_id($brand_name);
        $img = get_goods_img($row['goods_thumb']);
        $goods_thumb = addslashes($img['goods_thumb']);
        $goods_img = addslashes($img['goods_img']);
        $doc_url = addslashes(get_doc_url($row['goods_img']));
        $digikey_url = addslashes(get_digikey_url($row['digikey_url']));

        $u_sql = "UPDATE ecs_goods2 SET brand_id='$brand_id', goods_thumb='$goods_thumb', " . 
                 " goods_img='$goods_img', doc_url='$doc_url', digikey_url='$digikey_url' WHERE goods_id='$goods_id' LIMIT 1";
//        echo $u_sql . "\n";
        echo "update goods_id : " . $goods_id . "\n";
        mysql_query($u_sql);
    }
}
echo "start : " . $start . ", end : " . $end;


/**
 * 获取品牌ID
 * @parpam string $brand_name
 * @return integer
 */
function get_brand_id($brand_name = '') {
    $brand_name = trim($brand_name);
    if (!empty($brand_name)) {
        $brand_name = addslashes($brand_name);
        $sql = "SELECT brand_id FROM ecs_brand WHERE brand_name='$brand_name' LIMIT 1";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        return intval($row[0]); 
    }
}


/**
 * 处理商品图片
 * @param string $str
 * @return array
 */
function get_goods_img($str = '') {
    $str = trim($str);
    $no_img_url = 'http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg';
    if (!empty($str)) {
        $arr = explode("|", $str);
        $goods_thumb = is_url($arr[0]) ? trim($arr[0]) : $no_img_url;
        $goods_img = is_url($arr[1]) ? trim($arr[1]) : $goods_thumb;
        return array('goods_thumb'=>$goods_thumb, 'goods_img'=>$goods_img);
    }
}


/**
 * 获取文档地址
 * @param string $doc_url
 * @return string
 */
function get_doc_url($doc_url = '') {
    $doc_url = trim($doc_url);
    $arr = explode("|", $doc_url);
    return is_url($arr[1]) ? trim($arr[1]) : '';
}

/**
 * 处理digikey地址
 * @param string $digikey_url
 * @return string
 */
function get_digikey_url($digikey_url) {
    $search = 'http://search.digikey.com/cn/zh/products/';
    $replace = '/product-detail/zh/';
    return str_replace($search, $replace, $digikey_url);
}

/**
 * 检测是否为网址
 * @param string $url
 * @return array
 */
function is_url($url = '') {
    $url = trim($url);
    $flg = false;
    if (!empty($url) && preg_match("/^http\:\/\/.+?/i", $url)) {
        $flg = true;
    }
    return $flg;
}



?>

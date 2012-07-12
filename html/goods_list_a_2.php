<?php
/**
 * 更新到商品表 
 * @author Lok Mon Jun 11 13:43:38 CST 2012
 */
 
require('db_con.php');

$default_fields = array('图像','Digi-Key 零件编号','制造商零件编号','描述','系列','制造商',);
//$num = '1,300';
//$num = str_replace(',', '', $num);
//echo intval($num);exit;
$sql = "SELECT id, _cat, _key, _value, PageUrl FROM goods_list_a_1 WHERE 1 LIMIT 14,10";
$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)) {
	$id = intval($row[0]);
	$_cat = $row[1];
	$_key = $row[2];
	$_value = $row[3];
	$PageUrl = $row[4];
	
	$cat_arr = unserialize($_cat);
	$key_arr = unserialize($_key);
	$value_arr = unserialize($_value);
	
	$PageUrl = str_replace('http://www.digikey.cn', '', $PageUrl);
	$PageUrl = preg_replace("/(.*)\/page\/\d+/i", "\$1", $PageUrl);
	$s_cat_sql = "SELECT cat_id FROM category WHERE url like '%${PageUrl}%' LIMIT 1";
	$cat_id = intval(get_one($s_cat_sql));
	if (!$cat_id) {
		$cat_id = 10000;
	}
	
	$count = count($key_arr);
	
	foreach ($key_arr as $key=>$val) {
		$key_arr[$key] = strip_tags($val);
	}
	
	foreach ($value_arr as $val) {
		$v_count = count($val);

		if ($count == $v_count) {
			$goods_id = create_goods_id();
			
			$goods_thumb = grep_text($val[0]);
			
			$goods_thumb = preg_replace("/\<img([^\>]+)src=\"([^\>]+)\"([^\>]+)\>/i", "\$2", $goods_thumb);
			echo $goods_thumb . '<br />';
			
			$goods_name = strip_tags($val[1]);
			$digikey = grep_link2($val[1]);
			$goods_name = trim($goods_name);
			$brand_goods_id = $val[2];
			$goods_desc = $val[3];
			$series = $val[4];
			$suppliers = grep_link2($val[5]);
			$brand_id = get_brand_id($suppliers);

			$goods_number = $val[$v_count-4];
			$goods_number = grep_num($goods_number);
			
			$min_buynum = $val[$v_count-3];
			$min_buynum = grep_num($min_buynum);

			$shop_price = $val[$v_count-2];
			if (preg_match("/\<a([^\>]+)\>(.*)\<\/a\>/i", $shop_price)) {
				$shop_price = preg_replace("/\<a([^\>]+)\>(.*)\<\/a\>/i", "\$2", $shop_price);
			}

			$doc_url = $val[$v_count-1];
			if (preg_match("/\<a([^\>]+)\>(.*)\<\/a\>/i", $doc_url)) {
				$doc_url = preg_replace("/\<a([^\>]+)href=\"([^\>\"]+)\"([^\>]+)\>(.*)\<\/a\>/i", "\$2", $doc_url);
				$doc_url = strip_tags($doc_url);
			}
			
			if (strlen($goods_name) > 0) {
				$sql = "INSERT INTO ecs_goods (goods_id, cat_id, goods_name, brand_goods_id, goods_desc, series, brand_id, goods_number, min_buynum, shop_price, doc_url, digikey_url, goods_thumb) VALUES " . 
					   " ('$goods_id', '$cat_id', '$goods_name', '$brand_goods_id', '$goods_desc', '$series', '$brand_id', '$goods_number', '$min_buynum', '$shop_price', '$doc_url', '$digikey', '$goods_thumb') ";
//				echo $sql . '<br />';
//				mysql_query($sql);
			}


			for ($i = 6; $i < $count-4; $i++) {
				$ext_name = $key_arr[$i];
				$ext_value = $val[$i];
				
				$ext_name = addslashes($ext_name);
				$ext_value = addslashes($ext_value);
				
				
				$ext_sql = "INSERT INTO ecs_goods_ext_fields (ext_name, goods_id, cat_id, ext_value) VALUES " . 
						   " ('$ext_name', '$goods_id', '$cat_id', '$ext_value' )";

//				mysql_query($ext_sql);
			}
			echo 'goods_id ' . $goods_id . ': done!' . "\n";
			
//			$sql = "UPDATE goods_list_a_1 SET updated=2 WHERE id='$id' LIMIT 1";
//			mysql_query($sql);
			
		}
		
	}
	echo 'page done!' . "\n"; 
}
echo '@done!';
exit;


function grep_link($str) {
	if (preg_match("/\<a([^\>]+)\>(.*)\<\/a\>/i", $str)) {
			return preg_replace("/\<a([^\>]+)href=\"([^\>\"]+)\"([^\>]+)\>(.*)\<\/a\>/i", "\$2", $str);
	}
}

function grep_link2($str) {
	if (preg_match("/\<a([^\>]+)\>(.*)\<\/a\>/i", $str)) {
			return preg_replace("/\<a([^\>]+)href=\"([^\>\"]+)\"\>(.*)\<\/a\>/i", "\$2", $str);
	}
}

function grep_text($str) {
	if (preg_match("/\<a([^\>]+)\>(.*)\<\/a\>/i", $str)) {
			return preg_replace("/\<a([^\>]+)\>(.*)\<\/a\>/i", "\$2", $str);
	}
}

function grep_num($str) {
	$num = 0;
	if (strlen($str) > 0) {
		$str = strip_tags($str);
		$str = str_replace(',', '', $str);
		$num = intval($str);
		return $num;
	}
}

function create_goods_id() {
	$sql = "SELECT goods_id FROM ecs_goods WHERE 1 ORDER BY goods_id DESC LIMIT 1";
	$goods_id = intval(get_one($sql));
	
	if ($goods_id < 10000) {
		$goods_id = 10000;
	} else {
		$goods_id += 1;
	}
	return $goods_id;
	
}

function get_brand_id($str) {
	$str = str_replace('http://digikey.com', '', $str);
	$str = str_replace('http://www.digikey.com', '', $str);
	$sql = "SELECT brand_id FROM ecs_brand WHERE digikey like '%${str}%' LIMIT 1";
	$brand_id = intval(get_one($sql));
	if (!$brand_id) {
		$brand_id = 10000;
	} 
	return $brand_id;
}

 
 
?>
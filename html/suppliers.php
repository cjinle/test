<?php

error_reporting(E_ALL);

require('db_con.php');
include('simple_html_dom.php');

$sql = "SELECT * FROM suppliers WHERE 1 ";
$result = mysql_query($sql);

while ($row = mysql_fetch_row($result)) {
	$html = str_get_html($row[1]);
	
	foreach ($html->find('img#logo') as $img) {
		$logo = trim($img->src);
		if (!preg_match("/^http:\/\/(.*)/i", $logo)) {
			$logo = 'http://www.digikey.cn' . $logo;
		} 
	}
	
	foreach ($html->find('h1') as $h1) {
		$brand_name = trim($h1->innertext);
	}
	
	foreach ($html->find('span#mainDesc') as $span) {
		$brand_desc = trim($span->innertext);
	}
	
	$brand_desc2 = '';
	foreach ($html->find('span#secondDesc') as $span) {
		$brand_desc2 = trim($span->innertext);
	}
	
	$brand_desc2 = preg_replace("/<a>(.*)<\/a>/i", "", $brand_desc2);
	
	
	$brand_desc .= '<br /><br />' . $brand_desc2;
	
	$brand_name = addslashes($brand_name);
	$brand_desc = addslashes($brand_desc);
	
	$digikey = trim($row[2]);
	
	$first_letter = strtoupper(substr($brand_name, 0, 1));
	
	$sql = "INSERT INTO ecs_brand (brand_name, brand_logo, brand_desc, first_letter, digikey) VALUES " . 
		   " ('$brand_name', '$logo', '$brand_desc', '$first_letter', '$digikey') ";
//	echo $sql . '<br />';
	
	if (!check_brand($digikey)) {
			
//			mysql_query($sql);
	} else {
		echo 'brand is exist!<br />';
	}
	
	$sql = "UPDATE ecs_brand set brand_logo='$logo' WHERE digikey='$digikey' LIMIT 1";
	echo $sql . '<br>';
	mysql_query($sql);
	

}

/**
 * 检查供应商是否已经存在
 *
 * @param string $digikey
 * @return boolean
 */
function check_brand($digikey) {
	$digikey = strval($digikey);
	echo $digikey . '<br />';
	$sql = "SELECT COUNT(*) FROM ecs_brand WHERE digikey='$digikey'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	return intval($row[0]);
}


?>
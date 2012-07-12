<?php
/**
 * 价格区间测试
 *
 * 2012-6-20
 */


$goods_number = 1000000;


$digikey_msg = array(
	'goods_number' => 100,
	'pricing' => array(
		array(1,12,12),
		array(10,10,10),
		array(100,8,8)
	),
	'time' => time()

);



if (is_array($digikey_msg['pricing'])) {
	$count = count($digikey_msg['pricing']);
	$goods_price = $digikey_msg['pricing'][0][0] > 0 && $digikey_msg['pricing'][0][2] > 0 ? $digikey_msg['pricing'][0][2] : 0;
	 for ($i = 0; $i < $count; $i++) {
	 	if ($goods_number >= $digikey_msg['pricing'][$i][0]) {
	 		$goods_price = $digikey_msg['pricing'][$i][0] > 0 && $digikey_msg['pricing'][$i][2] > 0 ? $digikey_msg['pricing'][$i][2] : 0;
	 		continue;
	 	}
	 }

	// 价格异常
	if ($goods_price < 0.0001) {
		$tmp_arr = array('error_no' => 3, 'error_msg' => '价格异常');
		die(json_encode($tmp_arr));
		exit;
	}
}


var_dump($goods_price);

exit;



?>

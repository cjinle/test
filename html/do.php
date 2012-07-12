<?php
/**
 * 循环执行任务
 * @author Lok 2012/6/7
 */


error_reporting(E_ALL);

//$url = 'http://test.com/html/cat_content.php';
$url = 'http://test.com/html/goods_list.php';

for ($i = 0; $i < 30; $i++) {
	echo file_get_contents($url);
}
?>
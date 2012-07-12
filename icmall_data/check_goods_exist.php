<?php
/**
 * 检查商品是否已经存在数据表中
 *
 * @author Lok 2012/07/02
 */

require('../connect.php');

$sql = "SEELCT id,classId,partNumber,sourceLink";

$result = mysql_query($sql);


while ($row = mysql_fetch_row($result)) {
   $tmp[] = $row; 
}


var_dump($tmp);


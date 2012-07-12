<?php



$str = 'LTC4210-1CS6TR';

//$out = strstr($str, '#', true);

$out = substr($str, 0, strpos($str, '#'));


var_dump($out);




?>

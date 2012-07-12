<?php
/**
 * 2012/6/14
 */


$html = <<<EOF

<tbody><tr><th>价格分段</th><th>单价</th><th>扩充价格</th></tr>
<tr><td align="center">1</td><td align="right">0.58000</td><td align="right">0.58</td></tr>
<tr><td align="center">10</td><td align="right">0.52500</td><td align="right">5.25</td></tr>
<tr><td align="center">100</td><td align="right">0.47250</td><td align="right">47.25</td></tr>
<tr><td align="center">250</td><td align="right">0.43752</td><td align="right">109.38</td></tr>
<tr><td align="center">500</td><td align="right">0.42000</td><td align="right">210.00</td></tr>
</tbody>


EOF;



$pattern = "/<td.+?>([0-9\.]+)<\/td>/s";

preg_match_all ($pattern, $html, $out); 

$num_arr = $out[1];

$i = 1;
foreach ($num_arr as $num) {
    if ($i % 3 != 0) {
        echo $num . "&nbsp;"; 
    } else {
        echo $num . "<br />";
    } 
    $i++;
}


?>

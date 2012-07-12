<?php
/**
 * simple_html_dom test
 * @author Lok Wed Jun 13 14:58:37 CST 2012
 */
 
error_reporting(E_ALL);
require('simple_html_dom.php');


$html = <<<EOF
<table id="pricing" frame="void" rules="all" border="1" cellspacing="0" cellpadding="1">
<tbody><tr><th>价格分段</th><th>单价</th><th>扩充价格</th></tr>
<tr><td align="center">1</td><td align="right">2.57000</td><td align="right">2.57</td></tr>
<tr><td align="center">10</td><td align="right">2.46500</td><td align="right">24.65</td></tr>
<tr><td align="center">25</td><td align="right">2.25960</td><td align="right">56.49</td></tr>
<tr><td align="center">50</td><td align="right">2.15680</td><td align="right">107.84</td></tr>
<tr><td align="center">100</td><td align="right">2.05400</td><td align="right">205.40</td></tr>
<tr><td align="center">250</td><td align="right">1.79724</td><td align="right">449.31</td></tr>
<tr><td align="center">500</td><td align="right">1.74590</td><td align="right">872.95</td></tr>
<tr><td align="center">1,000</td><td align="right">1.48915</td><td align="right">1,489.15</td></tr>
<tr><td align="center">2,500</td><td align="right">1.38645</td><td align="right">3,466.13</td></tr>
</tbody></table>

EOF;

$html = str_get_html($html);

$i = 1;
$seq_char = "\t";
foreach ($html->find('tr td') as $td) {
	if ($i % 3 == 0) {
		$seq_char = "\n";
	} else {
		$seq_char = "\t";
	}
	$i++;
	echo $td->innertext . $seq_char;
}


 
?>
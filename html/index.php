<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
error_reporting(E_ALL);
include('simple_html_dom.php');
$str = <<<HTML
<h1 class="catfiltertopitem"><a href="/product-search/zh?FV=fff40036">RF/IF 和 RFID</a></h1>
<ul class="catfiltersub">
	<li><a href="/product-search/zh/rf-if-and-rfid/rf-misc-ics-and-modules/3539652" class="catfilterlink">RF 其它 IC 和模块</a> (684 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-front-end-lna-pa/3540092" class="catfilterlink">RF 前端 (LNA + PA)</a> (181 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-power-dividers-splitters/3539231" class="catfilterlink">RF 功率分配器/分线器</a> (105 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-diplexers/3539783" class="catfilterlink">RF 双工器</a> (80 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-transmitters/3539947" class="catfilterlink">RF 发射器</a> (389 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-antennas/3540022" class="catfilterlink">RF 天线</a> (1158 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-directional-coupler/3539230" class="catfilterlink">RF 定向耦合器</a> (600 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-shields/3539677" class="catfilterlink">RF 屏蔽</a> (88 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-switches/3539655" class="catfilterlink">RF 开关</a> (564 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-receivers/3539946" class="catfilterlink">RF 接收器</a> (836 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-receiver-transmitter-and-transceiver-finished-units/3539949" class="catfilterlink">RF 接收器、发射器及收发器的成品装置</a> (314 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-transceivers/3539948" class="catfilterlink">RF 收发器</a> (763 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-amplifiers/3539647" class="catfilterlink">RF 放大器</a> (1767 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-detectors/3539651" class="catfilterlink">RF 检测器</a> (315 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-die-products/3540012" class="catfilterlink">RF 模具产品</a> (126 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-mixers/3539648" class="catfilterlink">RF 混频器</a> (451 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-power-controller-ics/3539653" class="catfilterlink">RF 电源控制器 IC</a> (87 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-demodulators/3540120" class="catfilterlink">RF 解调器</a> (148 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-evaluation-and-development-kits-boards/3539644" class="catfilterlink">RF 评估和开发套件，板</a> (1384 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-modulators/3540119" class="catfilterlink">RF 调制器</a> (142 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfi-and-emi-shielding-and-absorbing-materials/3539897" class="catfilterlink">RFI 和 EMI - 屏蔽和吸收材料</a> (499 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-ics/3539642" class="catfilterlink">RFID IC</a> (324 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-transponders-tags/3539637" class="catfilterlink">RFID 发射应答器，标签</a> (335 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-antennas/3539639" class="catfilterlink">RFID 天线</a> (56 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-evaluation-and-development-kits-boards/3539640" class="catfilterlink">RFID 评估和开发套件及电路板</a> (95 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-reader-modules/3539638" class="catfilterlink">RFID 读取模块</a> (109 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rfid-accessories/3539641" class="catfilterlink">RFID配件</a> (59 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/rf-accessories/3539661" class="catfilterlink">RF配件</a> (244 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/balun/3539019" class="catfilterlink">平衡-不平衡变压器</a> (473 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/attenuators/3539493" class="catfilterlink">衰减器</a> (454 items)
	</li><li><a href="/product-search/zh/rf-if-and-rfid/obsolete-discontinued-part-numbers/3538994" class="catfilterlink">过时/停产零件编号</a> (130 items)
</li></ul>






HTML;


$html = str_get_html($str);

$con = mysql_connect('localhost', 'root', '');
mysql_select_db('test');
mysql_query("SET NAMES utf8");
$sql = "SELECT cat_id FROM category WHERE 1 ORDER BY cat_id DESC limit 1";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);



$frist_id = intval($row[0]) + 1;

foreach ($html->find('h1') as $h1) {
	foreach ($h1->find('a') as $a) {
		$href = trim($a->href);
		$name = trim($a->innertext);
		$check_sql = "SELECT COUNT(cat_id) as num FROM category WHERE url='$href' AND p_id=0 LIMIT 1";

		$result = mysql_query($check_sql);
		$row1 = mysql_fetch_array($result);

		if (intval($row1[0]) > 0) {
			echo 'the cat_name is exist. please check it!!!!';
			exit;
		}
		
		$sql = "INSERT INTO category (cat_id, cat_name, p_id, url) VALUES ('$frist_id', '$name', '0', '$href') ;";
		echo $sql . ';<br />';
//		mysql_query($sql);
	}
}

foreach($html->find('ul') as $ul) {
    foreach($ul->find('li') as $li) {
    	foreach ($li->find('a') as $a) {
    		$href = trim($a->href);
    		$name = trim($a->innertext);
    		
    		$sql = "INSERT INTO category (cat_name, p_id, url) VALUES ('$name', '$frist_id', '$href') ;";
			echo $sql . '<br />';
			mysql_query($sql);
    	}
    }
}
echo 'done!';



?>
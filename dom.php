<?php 
/**
 * 测试解析HTML文件
 */

$html = <<<EOF

<div id="noprint" scs_exclude="true">
   
    
    
    
    
    
   
    
    
   
   
   
   <link rel="stylesheet" type="text/css" href="//www.digikey.com/Global/css/HeaderFooter.css"/>
   <style type="text/css">
   .headerdiv {background: url("//www.digikey.com/Web Export/Common/Header/repeat_long.jpg") repeat scroll 0 0 transparent;}
   </style>

<div id="header" class="headerdiv" style="text-align:right">
      <a href="http://www.digikey.cn?curr=USD" style="position:absolute; left:0 ;">

	  <img id = 'dkcimg' src="//www.digikey.com/Web Export/Common/header/digikey_logo.jpg" alt="DigiKey Corporation" title="DigiKey Corporation" /></a>
	  

	  <div style="margin-left:191px">
			<div class="quick_links">
            <img src="//www.digikey.com/Web Export/Common/Header/gradient.jpg" align="absmiddle" />快速链接: 
            <a href="http://www.digikey.cn/classic/Ordering/AddPart.aspx?site=cn&lang=zhs&WT.z_header=link">检视订单</a> | <a href="http://www.digikey.cn/classic/Ordering/OrderStatus.aspx?site=CN&lang=ZHS&WT.z_header=link">订单状态</a> | <a href="http://www.digikey.cn/cn/zhs/info/contact-us.html?WT.z_header=link">联系我们</a> | <a href="http://www.digikey.cn/cn/zhs/info/sitemap.html?WT.z_header=link">站点地图</a> | <a href="http://www.digikey.cn/cn/zhs/international/global.html?WT.z_header=link">改换国家</a>
	    	</div>
         <div class="rootVoices myMenu">
            <div class="rootVoice {menu: 'empty'}" onclick="window.open('https://www.digikey.cn/classic/registereduser/mydigikey.aspx?site=cn&lang=zhs&WT.z_header=link','_self');">我的Digi-Key账户</div>
				<div class="rootVoice {menu: 'empty'}" onclick="window.open('http://www.digikey.cn/scripts/DkSearch/dksus.dll?lang=zhs&site=CN&keywords=&WT.z_header=link','_self');">产品索引</div>
				<div class="rootVoice {menu: 'empty'}" onclick="window.open('http://www.digikey.cn/Suppliers/SupplierIndex.page?site=cn&lang=zhs&WT.z_header=link','_self');">供货商索引</div>
				<div class="rootVoice {menu: 'menu_11'}">资源 <img src="//www.digikey.com/Web Export/Common/Header/down_arrow.gif" style="padding-left:5px;" /></div>
				<div class="rootVoice" style="position:relative; top:5px;" ><a href="http://www.digikey.cn/cn/zhs/international/global.html?WT.z_header=link" id="Digi-Key_International"><img src="//www.digikey.com/Web Export/Common/Flags/cn_flag.jpg" alt="国际网页" title="国际网页" /></a></div><div class="rootVoice currency USD" style="position:relative; top:5px;" ><a href="http://www.digikey.cn/cn/zhs/international/global.html?WT.z_header=link" id="Digi-Key_International"><img src="//www.digikey.com/Web Export/Common/Header/USD.jpg" alt="US Dollar" title="US Dollar" /></a></div>
         </div>
         <div style="float:right;">
            
			
			
		
			
		<img align="top" src="//www.digikey.com/Web Export/Common/Header/header-search-title-zhs.jpg" alt="Digi-Key零件搜索" title="Digi-Key零件搜索" style="float:left;" />
		
		
		<div style='background-image:url("//www.digikey.com/Web Export/Common/Header/header-search-repeat.jpg"); display: inline-block; background-repeat:repeat-x; border: 0px; margin: 0px; padding: 0px; float:left;'>
		<img src="//www.digikey.com/Web Export/Common/Header/header-search-left.jpg" />

		
		<form style="margin:0px; padding:0px; display:inline;" name="Sform" action="http://search.digikey.com/scripts/DkSearch/dksus.dll" type="External" method="get">
			<input name="WT.z_header" value="search_go" type="hidden" /><input name="lang" value="zhs" type="hidden" /><input name="site" value="cn" type="hidden" />
			<input name="keywords" size="35" class="textbox" accesskey="S" value="零件编号/关键词" onfocus="if (this.value==this.defaultValue) this.value='';" style="font-size: 12px; margin-top: 6px; vertical-align:top;  border:none; background-color:transparent; float-left;" type="text" />
			<input value="go" src="//www.digikey.com/Web Export/Common/Header/header-search-go.jpg" alt="Digi-Key零件搜索" title="Digi-Key零件搜索" onclick="if (keywords.value==keywords.defaultValue) keywords.value='';" type="image" border="0" /></div></form>
		
			
         </div>
      </div>
   </div>
</div>

<div id="menu_11" class="mbmenu">
	<a rel="title"  style="display:block;" >虚拟社区</a>
	<a href="http://www.digikey.cn/techxchange/index.jspa?WT.z_header=link" style="display:block;">TechXchange<sup>SM</sup></a>
	<a rel="title"  style="display:block;" >TechZones</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/energy-harvesting/index.html?WT.z_header=link" style="display:block;">能量收集解决方案</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/lighting/index.html?WT.z_header=link" style="display:block;">照明解决方案</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/microcontroller/index.html?WT.z_header=link" style="display:block;">微控制器解决方案</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/power/index.html?WT.z_header=link" style="display:block;">电源解决方案</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/sensors/index.html?WT.z_header=link" style="display:block;">传感器解决方案</a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/toolsxpress/index.html?WT.z_header=link" style="display:block;">ToolsXpress<sup>SM</sup></a>
	<a href="http://www.digikey.cn/cn/zhs/techzone/wireless/index.html?WT.z_header=link" style="display:block;">无线解决方案</a>
	<a rel="title"  style="display:block;" >虚拟培训</a>
	<a href="http://www.digikey.cn/cn/zhs/mkt/toolbar.html?WT.z_header=link" style="display:block;">Digi-Key工具栏</a>
	<a href="http://www.digikey.cn/PTM/PTMMaster.page?site=cn&lang=zhs&WT.z_header=link" style="display:block;">产品培训模块</a>
	<a rel="title"  style="display:block;" >物料清单管理工具</a>
	<a href="https://www.digikey.cn/classic/registereduser/bomwizard.aspx?site=cn&lang=zhs&WT.z_header=link" style="display:block;">物料清单管理器</a>
</div>



<div id="content">



<!-- VM336-->
<form action="/scripts/dksearch/dksus.dll?KeywordSearch" method=get>
<input type=hidden name=vendor value=0>
<a href="http://dkc1.digikey.com/cn/zh/help/help10.html">关键词:</a> 
<input type=text name=keywords class="dkdirchanger" size=35 maxlength=250 value=""><br>
<label><input type=checkbox id=stock name=stock value=1>现在库存</label><br><label><input type=checkbox id=pbfree name=pbfree value=1>无铅</label><br><label><input type=checkbox id=rohs name=rohs value=1>符合限制有害物质指令(RoHS)规范要求</label><br>
<br>
<input id=searchbutton type=submit value="重新搜索">
 <hr />
</form>
<p>记录匹配的标准:  51</p>
<table border=0 cellspacing=1 cellpadding=2><tr><th><h1 class=seohtagbold><a href="/product-search/zh?FV=fff4003e">光学检测设备</a></h1></th><th> > </th><th><h1 class=seohtagbold><a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899">显微镜</a></h1></th></tr></table>
<p>
为了充分利用Digi-Key的零件搜索功能：<br>
<br>
每次只进行一个方框选择，单击“应用筛检程序”按钮，并重复这一步骤<br>
如果想在一个方框内选择多种值，应在选择方框内的值时按下'Ctrl'键。<br>
</p>
<form method=post action="/scripts/dksearch/dksus.dll">
<input type=hidden name=FV value=fff4003e,fff8029b>
<input type=hidden name=vendor value=0>
<input type=hidden name=mnonly value=0>
<input type=hidden name=newproducts value=0>
<input type=hidden name=ptm value=0>
<input type=hidden name=quantity value=0>
<table border=0 cellpadding=3 cellspacing=0><tr>
<th>系列</th>
<th>制造商</th>
<th>类型</th>
<th>放大范围</th>
<th>感应区</th>
<th>工作距离</th>
<th>发光</th>
<th>相机类型</th>
</tr><tr>
<td align=center><select multiple size=10 name=PV-5>
<option value=818>-
<option value=5139>Digitus&reg;
<option value=19444>DSZ-44
<option value=26774>DSZ-44P
<option value=26771>DSZ-44PF
<option value=26773>DSZ-44T
<option value=19429>DSZ-70
<option value=26775>DSZ-70PFL
<option value=19430>DSZT-70
<option value=14278>iLoupe
<option value=19434>Mighty Scope
<option value=19435>NSW
<option value=26777>NSW-30P
<option value=26776>NSW-30PF
<option value=15032>SPZ-50
<option value=26772>SPZ-50PFM
<option value=19437>SPZT-50
<option value=30141>zipScope
<option value=3384>703
</select></td>
<td align=center><select multiple size=10 name=PV-1>
<option value=123>Assmann WSW Components
<option value=243>Aven Tools
<option value=17>TE Connectivity
</select></td>
<td align=center><select multiple size=10 name=PV183>
<option value=81>-
<option value=6124>显微镜，便携式
<option value=6123>显微镜，数字式
<option value=6126>显微镜，立体缩放（三筒）
<option value=6125>显微镜，立体缩放（双筒）
</select></td>
<td align=center><select multiple size=10 name=PV1034>
<option value=1>-
<option value=75>1x ~ 80x
<option value=69>6x, 20x
<option value=62>6.7x ~ 50x
<option value=36>10x
<option value=67>10x ~ 150x
<option value=9>10x ~ 200x
<option value=60>10x ~ 200x, 500x
<option value=72>10x ~ 20x, 120x
<option value=64>10x ~ 44x
<option value=71>10x ~ 50x, 200x
<option value=54>10x ~ 60x
<option value=70>10x, 20x
<option value=66>10x, 30x
<option value=63>15x ~ 200x 数字，10x、40x 光学
<option value=13>20x
<option value=65>20x ~ 70x
<option value=68>20x, 40x
<option value=17>25x
<option value=20>30x
<option value=23>40x
<option value=26>50x
<option value=73>60x ~ 100x
<option value=61>100x
<option value=25>500x
</select></td>
<td align=center><select multiple size=10 name=PV1033>
<option value=1>-
<option value=2>0.07" (1.8mm)
<option value=72>0.08" (2.00mm)
<option value=3>0.13" (3.24mm)
<option value=36>0.13" (3.30mm)
<option value=70>0.16" (4.00mm)
<option value=71>0.16" ~ 0.07" (4.00mm ~ 1.8mm)
<option value=5>0.18" (4.5mm)
<option value=53>0.39" ~ 0.11" (10.00mm ~ 2.80mm)
<option value=9>0.45" (11.5mm)
<option value=57>0.45", 0.22" (11.50mm, 5.70mm)
<option value=47>0.91" (23.00mm)
<option value=51>0.91" ~ 0.20" (23.00mm ~ 5.20mm)
<option value=55>0.91" ~ 0.21" (23.00mm ~ 5.30mm)
<option value=60>0.91", 0.30" (23.00mm, 7.60mm)
<option value=56>0.91", 0.45" (23.00mm, 11.50mm)
<option value=52>1.35" ~ 0.14" (34.30mm ~ 3.50mm)
<option value=59>1.35" ~ 0.14" (34.30mm ~ 3.60mm)
<option value=54>1.35" ~ 0.18" (34.30mm ~ 4.60mm)
<option value=58>1.65", 0.45" (42.00mm, 11.50mm)
</select></td>
<td align=center><select multiple size=10 name=PV1035>
<option value=1>-
<option value=41>0.00" ~ 0.04" (0.00mm ~ 1.00mm)
<option value=39>0.00" ~ 4.41" (0.00mm ~ 112.00mm)
<option value=49>0.08" (2.00mm)
<option value=29>0.12" (3.00mm)
<option value=30>0.16" (4.00mm)
<option value=31>0.22" (5.50mm)
<option value=40>0.33" ~ 4.41" (8.5mm ~ 112mm)
<option value=48>0.39" ~ 19.69" (10mm ~ 500mm)
<option value=34>0.59" (15.00mm)
<option value=35>3.15" (80.00mm)
<option value=36>3.25" (82.50mm)
<option value=37>3.54" (90.00mm)
<option value=38>4.25" (108.00mm)
</select></td>
<td align=center><select multiple size=10 name=PV528>
<option value=17>-
<option value=34>LED
<option value=40>LED, 白色 (4)
<option value=35>LED, 白色 (6)
<option value=44>LED，白色 (4) 可调式
<option value=43>LED，白色(8)
<option value=42>LED，白色(8)可调节
<option value=29>UV (405nm)
<option value=16>不发光
<option value=15>发光
<option value=39>用户自选
<option value=36>笔形手电筒
<option value=37>荧光灯, 9W
<option value=26>荧光环形灯
</select></td>
<td align=center><select multiple size=10 name=PV1032>
<option value=1>-
<option value=48>CMOS 1/2"
<option value=36>CMOS 1/3"
<option value=34>CMOS 1/4"
<option value=49>CMOS, 2MP
<option value=39>用户自选
<option value=38>1.3MP
<option value=37>7MP
</select></td>
</tr></table>
<label><input type=checkbox id=stock name=stock value=1>现在库存</label><br><label><input type=checkbox id=pbfree name=pbfree value=1>无铅</label><br><label><input type=checkbox id=rohs name=rohs value=1>符合限制有害物质指令(RoHS)规范要求</label><br>
<br><input type=reset value="重设"><input type=submit value="应用筛检程序">
</form>
<a name=products></a><p><img src="http://dkc3.digikey.com/us/images/rohs3.gif" border=0 alt="限制有害物质指令(RoHS)达标替代产品">如想查看符合对限制有害物质指令(RoHS)规范要求的代替物，请点击零件号码旁边的「RoHS」图像。<br />
点击Digi-Key零件编号或单价链接，便可及时查看目前的定价。
</p>
<form name=srform method=post action="/scripts/dksearch/dksus.dll?KeywordSearch">
<input type=hidden name=FV value=fff4003e,fff8029b>
<input type=hidden name=mnonly value=0>
<input type=hidden name=newproducts value=0>
<input type=hidden name=ColumnSort value=0>
<input type=hidden name=page value=1>
<input type=hidden name=stock value=0>
<input type=hidden name=pbfree value=0>
<input type=hidden name=rohs value=0>
<input type=hidden name=quantity value=0>
<input type=hidden name=ptm value=0>
</form>
<div id="sbpdialog" style="display:none" align=center>
<table align=left><tr><td><img src="http://dkc3.digikey.com/images/dlglogo.png" alt="Logo" style="float: left;"></td><td style="font-weight: bold; font-size: 14pt; margin: 0px; vertical-align: middle;">按价格排序</td></tr></table>
<form name="sbpform" action="" onsubmit="return onPressAdvancedSbp(this.ColumnSort.value, this.quantity.value, this.stock.checked, this.pbfree.checked, this.rohs.checked)">
<table class="roundCorners digiGray" style="margin: 1em; clear: left;"><tr><th align=left valign=top>顺序</th><td align=left valign=top><select name=ColumnSort><option value="1000011">升序</option><option value="-1000011">降序</option></select></td></tr>
<tr><th align=left valign=top>筛选</th><td align=left valign=top><label><input type=checkbox id=stock name=stock value=1>现在库存</label><br><label><input type=checkbox id=pbfree name=pbfree value=1>无铅</label><br><label><input type=checkbox id=rohs name=rohs value=1>符合限制有害物质指令(RoHS)规范要求</label><br>
</td></tr></table><table rules=cols frame=void cellpadding=3 cellspacing=0>
<tr>
<td align=left valign=top style="padding-right: 1em;" width="50%">
<p style="font-size: 11pt; font-weight: bold;">高阶排序</p> <p> 这是您的排序结果呈现的数量。未能提供该数量的零件将被移至结果列表的底部。 如果按价格排序后再按不同标准排序，那些零件将被返回至正常排序。</p><p><label><span style="font-weight: bold;">零件数量</span>（必需）<input type=text name=quantity onkeyup="this.form.f2button.disabled=this.value.length==0||isNaN(this.value);" size=9></label></p></td>
<td align=left valign=top style="padding-left: 1em;">
<p style="font-size: 11pt; font-weight: bold;">简单排序</p>  <p> 在结果列表中按单价对零件排序。该排序不考虑每个零件的最低数量。 最低数量大的零件定价低于最低数量少的零件。</p></td>
</tr>
<tr>
<td align=center valign=bottom style="padding-right: 1em;">
<button name=f2button onclick="onPressAdvancedSbp(this.form.ColumnSort.value, this.form.quantity.value, this.form.stock.checked, this.form.pbfree.checked, this.form.rohs.checked);" disabled>按价格排序 - 高阶</button>
</td>
<td align=center valign=bottom style="padding-left: 1em;">
<button name=button1 onclick="hideDialog('#sbpdialog'); sortQty(this.form.ColumnSort.value, 0, this.form.stock.checked, this.form.pbfree.checked, this.form.rohs.checked); return false;">按价格排序 - 简易</button>
</td>
</tr>
</table>
</form>
</div>

<table>
<tr><td align=left>页面 1/3 (  <span class="digiGray">1</span>   <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/2">2</a>   <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/3">3</a>  <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/3">最后一个</a>  <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/2">下一页</a> )
</td><td align=right>美元价格</td></tr><tr><td colspan=2><table id=productTable border=1 cellspacing=1 cellpadding=2 style="clear: right;">
<thead>
<tr><th>图像</th><th>Digi-Key 零件编号</th><th>制造商零件编号</th><th>描述</th><th>系列</th><th>制造商</th><th>类型</th><th>放大范围</th><th>感应区</th><th>工作距离</th><th>发光</th><th>相机类型</th><th><a href="http://dkc1.digikey.com/cn/zh/help/help17.html">现有数量</a></th><th><a href="http://dkc1.digikey.com/cn/zh/help/help11.html">最低订购数量是</a></th><th><a href="http://dkc1.digikey.com/cn/zh/help/help11.html">单价</a></th><th><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="规格书"></th></tr>
<tr>
<td>&nbsp;</td><td><a href="javascript:sort(1000001);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000001);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(1000002);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000002);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(1000003);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000003);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(1000006);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000006);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(1000007);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000007);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(183);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-183);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(1034);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1034);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(1033);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1033);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(1035);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1035);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(528);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-528);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(1032);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1032);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td>
<td><a href="javascript:sort(1000009);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000009);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sort(1000008);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sort(-1000008);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td><a href="javascript:sortByPrice(1000011);"><img src="http://dkc3.digikey.com/us/images/up.gif" align=left alt="升序" border=0></a>
<a href="javascript:sortByPrice(-1000011);"><img src="http://dkc3.digikey.com/us/images/dn.gif" align=right alt="降序" border=0></a>
</td><td>&nbsp;</td></tr>
<tbody>
<tr>
<td><a href="/product-detail/zh/DA-70350/AE10324-ND/1650424"><img border=0 height=64 src="http://media.digikey.com/photos/Assmann%20Photos/Mfg_DA-70350_tmb.jpg" alt="DA-70350 Assmann WSW Components"></a></td><td nowrap><a href="/product-detail/zh/DA-70350/AE10324-ND/1650424">AE10324-ND</a></td><td>DA-70350</td><td>MICROSCOPE USB 10X - 200X</td><td><a href="/product-search/zh?FV=ffec1413">Digitus&reg;</a></td><td><a href="http://digikey.com/Suppliers/cn/Assmann.page?lang=ZH">Assmann WSW Components</a></td><td>显微镜，数字式</td><td>10x ~ 200x</td><td>-</td><td>-</td><td>LED, 白色 (6)</td><td>CMOS 1/4"</td><td align=center>74</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/DA-70350/AE10324-ND/1650424">110.22000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Assmann%20PDFs/DA-70350%20User%20Manual.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="DA-70350 User Manual"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-300/243-1114-ND/2756896"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26700-300_tmb.jpg" alt="26700-300 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-300/243-1114-ND/2756896">243-1114-ND</a></td><td>26700-300</td><td>MICROSCOPE ZIPSCOPE USB DGTL 2M</td><td><a href="/product-search/zh?FV=ffec75bd">zipScope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 50x, 200x</td><td>-</td><td>0.39" ~ 19.69" (10mm ~ 500mm)</td><td>LED，白色(8)可调节</td><td>CMOS 1/2"</td><td align=center>32</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-300/243-1114-ND/2756896">104.21000</a></td>
<td><center><a href="http://www.aventools.com/pdf/ZipScopes.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-300,301,311"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-200/243-1065-ND/1953868"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26700-200_tmb.JPG" alt="26700-200 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-200/243-1065-ND/1953868">243-1065-ND</a></td><td>26700-200</td><td>DIGITAL MIGHTY SCOPE</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 200x</td><td>-</td><td>0.33" ~ 4.41" (8.5mm ~ 112mm)</td><td>LED, 白色 (6)</td><td>CMOS 1/4"</td><td align=center>32</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-200/243-1065-ND/1953868">209.47000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-200.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-200"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-542/243-1122-ND/2756904"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-542_tmb.jpg" alt="26800C-542 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-542/243-1122-ND/2756904">243-1122-ND</a></td><td>26800C-542</td><td>POCKET SCOPE 60-100X W/ILLUM</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>60x ~ 100x</td><td>0.16" ~ 0.07" (4.00mm ~ 1.8mm)</td><td>-</td><td>LED</td><td>-</td><td align=center>9</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-542/243-1122-ND/2756904">18.42000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26800C-542.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-542"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-534/243-1047-ND/774063"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26800C-534_tmb.JPG" alt="26800C-534 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-534/243-1047-ND/774063">243-1047-ND</a></td><td>26800C-534</td><td>MICROSCOPE POCKET LTD W/RETICLE</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>40x</td><td>-</td><td>0.16" (4.00mm)</td><td>发光</td><td>-</td><td align=center>22</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-534/243-1047-ND/774063">19.50000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800C-534.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-534"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-552/243-1127-ND/2756909"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-552_tmb.jpg" alt="26800C-552 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-552/243-1127-ND/2756909">243-1127-ND</a></td><td>26800C-552</td><td>POCKET SCOPE 25X W/LED LITE&SCLE</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>25x</td><td>0.13" (3.30mm)</td><td>-</td><td>LED</td><td>-</td><td align=center>7</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-552/243-1127-ND/2756909">29.50000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800C-552.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-552"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-301/243-1115-ND/2756897"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26700-301_tmb.jpg" alt="26700-301 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-301/243-1115-ND/2756897">243-1115-ND</a></td><td>26700-301</td><td>MICROSCOPE USB DGTL .3M WIRELESS</td><td><a href="/product-search/zh?FV=ffec75bd">zipScope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 20x, 120x</td><td>-</td><td>0.39" ~ 19.69" (10mm ~ 500mm)</td><td>LED，白色(8)</td><td>CMOS 1/2"</td><td align=center>2</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-301/243-1115-ND/2756897">156.84000</a></td>
<td><center><a href="http://www.aventools.com/pdf/ZipScopes.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-300,301,311"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-202/243-1103-ND/1974030"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26700-202_tmb.JPG" alt="26700-202 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-202/243-1103-ND/1974030">243-1103-ND</a></td><td>26700-202</td><td>MIGHTY SCOPE ANLG 200X 250MA</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 200x</td><td>-</td><td>0.33" ~ 4.41" (8.5mm ~ 112mm)</td><td>LED, 白色 (6)</td><td>CMOS 1/3"</td><td align=center>3</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-202/243-1103-ND/1974030">209.47000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-202.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-202"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-209/243-1143-ND/3191422"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26700-209/243-1143-ND/3191422">243-1143-ND</a></td><td>26700-209</td><td>MIGHTY SCOPE 5M 10X-200X</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 200x</td><td>-</td><td>0.33" ~ 4.41" (8.5mm ~ 112mm)</td><td>LED, 白色 (6)</td><td>CMOS 1/4"</td><td align=center>18</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-209/243-1143-ND/3191422">248.00000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26700-209_Web.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-209"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-204/243-1104-ND/1974031"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26700-204_tmb.JPG" alt="26700-204 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-204/243-1104-ND/1974031">243-1104-ND</a></td><td>26700-204</td><td>MIGHTY SCOPE 500X 5VDC 110MA</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>500x</td><td>-</td><td>0.00" ~ 0.04" (0.00mm ~ 1.00mm)</td><td>LED, 白色 (6)</td><td>CMOS 1/4"</td><td align=center>6</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-204/243-1104-ND/1974031">262.11000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-204.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-204"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-205/243-1105-ND/1974032"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26700-205_tmb.JPG" alt="26700-205 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-205/243-1105-ND/1974032">243-1105-ND</a></td><td>26700-205</td><td>MIGHTY SCOPE UV 200X 5VDC 110MA</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 200x</td><td>-</td><td>0.33" ~ 4.41" (8.5mm ~ 112mm)</td><td>UV (405nm)</td><td>CMOS 1/4"</td><td align=center>2</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-205/243-1105-ND/1974032">262.11000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-205.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-205"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-520/243-1066-ND/1953869"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26700-520_tmb.JPG" alt="26700-520 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-520/243-1066-ND/1953869">243-1066-ND</a></td><td>26700-520</td><td>ILOUPE PORTABLE DGTL MICROSCOPE</td><td><a href="/product-search/zh?FV=ffec37c6">iLoupe</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>15x ~ 200x 数字，10x、40x 光学</td><td>-</td><td>-</td><td>LED，白色 (4) 可调式</td><td>CMOS, 2MP</td><td align=center>2</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-520/243-1066-ND/1953869">399.00000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-520.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-520"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-208/243-1113-ND/2425327"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/243-1113_tmb.jpg" alt="26700-208 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26700-208/243-1113-ND/2425327">243-1113-ND</a></td><td>26700-208</td><td>MIGHTY SCOPE PROPAK</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>10x ~ 200x, 500x</td><td>-</td><td>0.00" ~ 4.41" (0.00mm ~ 112.00mm)</td><td>LED, 白色 (6)</td><td>CMOS 1/3"</td><td align=center>3</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-208/243-1113-ND/2425327">415.79000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26700-208.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-208"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800B-371/243-1062-ND/1840031"><img border=0 height=64 src="http://media.digikey.com/photos/Aven%20Photos/26800B-371_tmb.jpg" alt="26800B-371 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800B-371/243-1062-ND/1840031">243-1062-ND</a></td><td>26800B-371</td><td>MICROSCOPE STEREO ZOOM SPZ-50</td><td><a href="/product-search/zh?FV=ffec6894">SPZ-50PFM</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，立体缩放（双筒）</td><td>6.7x ~ 50x</td><td>1.35" ~ 0.14" (34.30mm ~ 3.50mm)</td><td>4.25" (108.00mm)</td><td>荧光灯, 9W</td><td>-</td><td align=center>7</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800B-371/243-1062-ND/1840031">1,237.12000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800B-371.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800B-371"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-541/243-1121-ND/2756903"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-541_tmb.jpg" alt="26800C-541 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-541/243-1121-ND/2756903">243-1121-ND</a></td><td>26800C-541</td><td>POCKET SCOPE 40X W/ILLUMINATION</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>40x</td><td>0.16" (4.00mm)</td><td>0.08" (2.00mm)</td><td>LED</td><td>-</td><td align=center>4</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-541/243-1121-ND/2756903">24.16000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26800C-541.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-541"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-550/243-1125-ND/2756907"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-550_tmb.jpg" alt="26800C-550 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-550/243-1125-ND/2756907">243-1125-ND</a></td><td>26800C-550</td><td>POCKET MICROSCOPE 25X W/LED LGHT</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>25x</td><td>0.13" (3.30mm)</td><td>-</td><td>LED</td><td>-</td><td align=center>3</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-550/243-1125-ND/2756907">28.06000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26800C-550.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-550"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-551/243-1126-ND/2756908"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-551_tmb.jpg" alt="26800C-551 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-551/243-1126-ND/2756908">243-1126-ND</a></td><td>26800C-551</td><td>POCKET MICROSCOPE 50X W/LED LGHT</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>50x</td><td>0.08" (2.00mm)</td><td>-</td><td>LED</td><td>-</td><td align=center>0</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-551/243-1126-ND/2756908">28.06000</a></td>
<td><center><a href="http://media.digikey.com/PDF/Data%20Sheets/Aven%20PDFs/26800C-551.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-551"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-553/243-1128-ND/2756918"><img border=0 height=64 src="http://media.digikey.com/Photos/Aven%20Photos/26800C-553_tmb.jpg" alt="26800C-553 Aven Tools"></a></td><td nowrap><a href="/product-detail/zh/26800C-553/243-1128-ND/2756918">243-1128-ND</a></td><td>26800C-553</td><td>POCKET SCOPE 50X W/LED LITE&SCLE</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>50x</td><td>0.08" (2.00mm)</td><td>-</td><td>LED</td><td>-</td><td align=center>4</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26800C-553/243-1128-ND/2756918">29.50000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800C-553.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-553"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-536/26800C-536-ND/1992846"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26800C-536/26800C-536-ND/1992846">26800C-536-ND</a></td><td>26800C-536</td><td>POCKET MICROSCOPE ILLUM 20X</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>20x</td><td>-</td><td>-</td><td>-</td><td>-</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/26800C-536/26800C-536-ND/1992846">69.40000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800C-536.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-536"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-540/26800C-540-ND/1992848"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26800C-540/26800C-540-ND/1992848">26800C-540-ND</a></td><td>26800C-540</td><td>POCKET MICROSCOPE ILLUM 50X</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>50x</td><td>-</td><td>0.16" (4.00mm)</td><td>-</td><td>-</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/26800C-540/26800C-540-ND/1992848">85.91000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26800C-540.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26800C-540"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26700-203/243-1145-ND/3306004"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26700-203/243-1145-ND/3306004">243-1145-ND</a></td><td>26700-203</td><td>MIGHTY SCOPE 10X-80X AUTO FOCUS</td><td><a href="/product-search/zh?FV=ffec4bea">Mighty Scope</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，数字式</td><td>1x ~ 80x</td><td>-</td><td>-</td><td>LED，白色 (4) 可调式</td><td>CMOS, 2MP</td><td align=center>0</td>
<td align=center>1</td>
<td align=center><a href="/product-detail/zh/26700-203/243-1145-ND/3306004">293.82000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/26700-203_Web.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="26700-203"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-531/243-1048-ND/774064"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26800C-531/243-1048-ND/774064">243-1048-ND</a></td><td>26800C-531</td><td>MICROSCOPE LTD SHOP W/DL RETICLE</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>40x</td><td>0.18" (4.5mm)</td><td>0.59" (15.00mm)</td><td>笔形手电筒</td><td>-</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/26800C-531/243-1048-ND/774064">298.80000</a></td>
<td><center> - </center></td></tr>
<tr>
<td><a href="/product-detail/zh/26800C-532/243-1042-ND/774065"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/26800C-532/243-1042-ND/774065">243-1042-ND</a></td><td>26800C-532</td><td>MICROSCOPE LTD SHOP W/DL RETICLE</td><td>-</td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，便携式</td><td>100x</td><td>0.07" (1.8mm)</td><td>0.22" (5.50mm)</td><td>笔形手电筒</td><td>-</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/26800C-532/243-1042-ND/774065">323.70000</a></td>
<td><center> - </center></td></tr>
<tr>
<td><a href="/product-detail/zh/NSW-20/NSW-20-ND/1992854"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/NSW-20/NSW-20-ND/1992854">NSW-20-ND</a></td><td>NSW-20</td><td>MICROSCOPE BODY STEREO 10X/20X</td><td><a href="/product-search/zh?FV=ffec4beb">NSW</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，立体缩放（双筒）</td><td>10x, 20x</td><td>0.91", 0.45" (23.00mm, 11.50mm)</td><td>-</td><td>用户自选</td><td>用户自选</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/NSW-20/NSW-20-ND/1992854">417.80000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/NSW-20.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="NSW-20"></a>
</center></td></tr>
<tr>
<td><a href="/product-detail/zh/NSW-30/NSW-30-ND/1992855"><img border=0 height=64 src="http://media.digikey.com/Photos/NoPhoto/NoPhoto_TMB.jpg" alt="Photo Not Available"></a></td><td nowrap><a href="/product-detail/zh/NSW-30/NSW-30-ND/1992855">NSW-30-ND</a></td><td>NSW-30</td><td>MICROSCOPE BODY STEREO 10X/30X</td><td><a href="/product-search/zh?FV=ffec4beb">NSW</a></td><td><a href="http://digikey.com/Suppliers/cn/Aven.page?lang=ZH">Aven Tools</a></td><td>显微镜，立体缩放（双筒）</td><td>10x, 30x</td><td>0.91", 0.30" (23.00mm, 7.60mm)</td><td>-</td><td>用户自选</td><td>用户自选</td><td align=center>0</td>
<td align=center>1<br><a href="http://dkc1.digikey.com/cn/zh/HELP/help09.html">非库存货</a>
</td>
<td align=center><a href="/product-detail/zh/NSW-30/NSW-30-ND/1992855">417.80000</a></td>
<td><center><a href="http://media.digikey.com/pdf/Data%20Sheets/Aven%20PDFs/NSW-30.pdf" target="_blank"><img border=0 src="http://dkc3.digikey.com/cn/images/datasheet.gif" alt="NSW-30"></a>
</center></td></tr>
</table>
</td></tr><tr><td colspan=2>页面 1/3 (  <span class="digiGray">1</span>   <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/2">2</a>   <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/3">3</a>  <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/3">最后一个</a>  <a href="/product-search/zh/optical-inspection-equipment/microscopes/4063899/page/2">下一页</a> )
</td></tr></table>
<p>3:24:19 6/4/2012</p>
</div>


<div id="noprint" scs_exclude="true">



  <div id="youramigo">
      <br /><br />
<p><a href="http://parts.digikey.com/1/parts-grpd/indexb1.html"></a></p>
   </div>
   <table id="footer">
     <tr>
         <td style="text-align:left;">Copyright &copy; 1995-2012, Digi-Key Corporation.<br /><a href="http://dkc1.digikey.com/cn/zh/mkt/Privacy.html">隐私声明</a><a href="http://dkc1.digikey.com/cn/zh/mkt/Privacy.html"></a> |&nbsp;<a href="http://dkc1.digikey.com/cn/zh/mkt/Terms.html">条款</a><br />&nbsp;<a href="mailto:china.support@digikey.com">china.support@digikey.com</a></td>
         <td style="text-align:center;"><a href="http://www.digikey.com/cn/zhs/Info/authorized-distributor.html" target="_self"><img title="ECIA/CEDA/ECSN" src="https://www.digikey.com/Web Export/Common/Footer/homepage-associations.jpg" border="0" alt="ECIA/CEDA/ECSN" hspace="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
         <td style="text-align:right;">701 Brooks Avenue South, Thief River Falls, MN 56701 USA<br />免费电话: 4008 824 440<br />电话: (852) 3104 0500&nbsp;&nbsp;传真: (852) 3104 0686</td>
     </tr>
   </table>
</div>

	<!-- START OF SmartSource Data Collector TAG -->
	<!-- Copyright (c) 1996-2009 WebTrends Inc.  All rights reserved. -->
	<!-- Version: 8.6.2 -->
	<!-- Tag Builder Version: 3.0  -->
	<!-- Created: 5/27/2009 3:23:42 PM -->
	
	<!-- ----------------------------------------------------------------------------------- -->
	<!-- Warning: The two script blocks below must remain inline. Moving them to an external -->
	<!-- JavaScript include file can cause serious problems with cross-domain tracking.      -->
	<!-- ----------------------------------------------------------------------------------- -->
	
	
	
	
	
   
	<noscript>
	<div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="//statse.webtrendslive.com/none/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2"/></div>
	</noscript>


EOF;




$doc = new DOMDocument();

$doc->loadHTML($html);


echo $doc->saveHTML();


echo 'done!';




?>


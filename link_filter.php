<?php
/*
 * Created on 2012-6-21
 *
 * 过滤A链接
 */



$str = 'a:4:{i:0;a:3:{s:4:"name";s:14:"alipay_account";s:4:"type";s:4:"text";s:5:"value";s:0:"";}i:1;a:3:{s:4:"name";s:10:"alipay_key";s:4:"type";s:4:"text";s:5:"value";s:0:"";}i:2;a:3:{s:4:"name";s:14:"alipay_partner";s:4:"type";s:4:"text";s:5:"value";s:0:"";}i:3;a:3:{s:4:"name";s:17:"alipay_pay_method";s:4:"type";s:6:"select";s:5:"value";s:1:"0";}}';

$aa = unserialize($str);
print_r($aa);exit;


$link = '<a href="http://www.jd5.com/news/20110530/870_2.html"><img border="0" alt="" jquery1306723552328="2" style="cursor: pointer" src="http://www.jd5.com/d/file/meiti/loss/recipes/2011-05-30/c4ef70e8abf3bcf23dd72c4d31724dce.jpg"></a>';


$pattern = '%<a[^>]+>(.*)<\/a>%';


$str = preg_match($pattern, "\$0", $link);


echo $str;

exit;




?>

<?php
/**
 * 支付宝处理页面 
 */
class AlipayAction {
	

	
	public function notify() {
		var_dump($_REQUEST);
	}
	
	public function callback() {
		var_dump($_REQUEST);
	}
	
	
	
	/**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     * @return	string
     */
    public function alipay_code()
    {
        $charset = 'utf-8';
        $service = 'trade_create_by_buyer';
        $extend_param = 'isv^sh22';
        
        // 下面为测试参数
        $partner = '2088002319239056';
        $notify_url = 'http://www.le23.com/alipay/notify.php';
        $return_url = 'http://www.le23.com/alipay/callback.php';
        $subject = '123456789';
        $out_trade_no = $subject . '001';
        $price = '0.01';
        $seller_email = 'cjinle@gmail.com';
        
        $parameter = array(
            'extend_param'      => $extend_param,
            'service'           => $service,
            'partner'           => $partner,
            //'partner'           => ALIPAY_ID,
            '_input_charset'    => $charset,
            // 服务器异步通知页面
            'notify_url'        => '',
            // 页面跳转通知页面
            'return_url'        => '',
            /* 业务参数 */ // 商品名称
            'subject'           => $subject,
            // sdf
            'out_trade_no'      => $out_trade_no,
            // 支付金额
            'price'             => $price,
            // 商品数量
            'quantity'          => 1,
            'payment_type'      => 1,
            /* 物流参数 */
            'logistics_type'    => 'EXPRESS',
            'logistics_fee'     => 0,
            'logistics_payment' => 'BUYER_PAY_AFTER_RECEIVE',
            /* 买卖双方信息 */
            'seller_email'      => $seller_email
        );

        ksort($parameter);
        reset($parameter);

        $param = '';
        $sign  = '';

        foreach ($parameter AS $key => $val)
        {
            $param .= "$key=" .urlencode($val). "&";
            $sign  .= "$key=$val&";
        }

        $param = substr($param, 0, -1);
        $sign  = substr($sign, 0, -1). $payment['alipay_key'];
        //$sign  = substr($sign, 0, -1). ALIPAY_AUTH;

        $button = '<input type="button" class="btn" onclick="window.open(\'https://mapi.alipay.com/gateway.do?'.$param. '&sign='.md5($sign).'&sign_type=MD5\')" value="立即支付" />';
//        $button = '<input type="button" class="btn" onclick="window.open(\'https://www.alipay.com/cooperate/gateway.do?'.$param. '&sign='.md5($sign).'&sign_type=MD5\')" value="立即支付" />';

        return $button;
    }
	
	
}





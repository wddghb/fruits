<?php
namespace app\index\controller;
use Config;
use think\Controller;

class Pay  extends  Controller
{
    public function index()
    {
        
		return $this->fetch();
		
	}
	
	public function pay()
    {
        
		
	//商户订单号，商户网站订单系统中唯一订单号，必填
    $out_trade_no = trim($_POST['WIDout_trade_no']);

    //订单名称，必填
    $subject = trim($_POST['WIDsubject']);

    //付款金额，必填
    $total_amount = trim($_POST['WIDtotal_amount']);

    //商品描述，可空
    $body = trim($_POST['WIDbody']);
	
	$params = array(
	
		'out_trade_no' => $out_trade_no,
		'subject'      => $subject,
		'total_amount' => $total_amount,
		'body'         => $body,
		'config'       => Config::pull('alipay')
	
	);
	
	
	
	
		require_once dirname( dirname(__FILE__)).'/extend/alipay/pagepay/pagepay.php';
		
		$pagepay = new \PagePay();
		
		$pagepay->pay($params);
	
	}
	
	public function return_url()
    {
        
		//return $this->fetch();
		
	}
	public function notify_url()
    {
        
		//return $this->fetch();
		
	}
}

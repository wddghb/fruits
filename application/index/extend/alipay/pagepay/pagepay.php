<?php
//require_once dirname(dirname(__FILE__)).'/config.php';
require_once dirname(__FILE__).'/service/AlipayTradeService.php';
require_once dirname(__FILE__).'/buildermodel/AlipayTradePagePayContentBuilder.php';

class PagePay 
{

   
    public function pay(array $params)
	{
		
		$payRequestBuilder = new AlipayTradePagePayContentBuilder();
		$payRequestBuilder->setBody($params['body']);
		$payRequestBuilder->setSubject($params['subject']);
		$payRequestBuilder->setTotalAmount($params['total_amount']);
		$payRequestBuilder->setOutTradeNo($params['out_trade_no']);
		$config  = $params['config']

		$aop = new AlipayTradeService($config);

		/**
		 * pagePay 电脑网站支付请求
		 * @param $builder 业务参数，使用buildmodel中的对象生成。
		 * @param $return_url 同步跳转地址，公网可以访问
		 * @param $notify_url 异步通知地址，公网可以访问
		 * @return $response 支付宝返回的信息
		*/
		$response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

		//输出表单
		var_dump($response);
		
		
	}

	
}

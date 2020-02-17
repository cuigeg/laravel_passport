<?php
/**
 * dingtalk API: dingtalk.oapi.dingpay.order.syncstatus request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiDingpayOrderSyncstatusRequest
{
	/** 
	 * 钉支付订单号
	 **/
	private $orderNos;
	
	private $apiParas = array();
	
	public function setOrderNos($orderNos)
	{
		$this->orderNos = $orderNos;
		$this->apiParas["order_nos"] = $orderNos;
	}

	public function getOrderNos()
	{
		return $this->orderNos;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingpay.order.syncstatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderNos,"orderNos");
		RequestCheckUtil::checkMaxListSize($this->orderNos,20,"orderNos");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

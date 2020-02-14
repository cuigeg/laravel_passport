<?php
/**
 * dingtalk API: dingtalk.oapi.appstore.internal.order.consume request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAppstoreInternalOrderConsumeRequest
{
	/** 
	 * 内购商品订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 订购商品核销数量
	 **/
	private $quantity;
	
	/** 
	 * 核销请求Id，由ISV生成，用于请求幂等
	 **/
	private $requestId;
	
	/** 
	 * 员工在当前企业内的唯一标识，也称staffId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.appstore.internal.order.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->requestId,"requestId");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.catering.allowance.capacity.get.beta request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringAllowanceCapacityGetBetaRequest
{
	/** 
	 * 用餐时间
	 **/
	private $meaTime;
	
	/** 
	 * 应付金额
	 **/
	private $orderFullAmount;
	
	/** 
	 * 订单id
	 **/
	private $orderid;
	
	/** 
	 * 点餐人userid
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setMeaTime($meaTime)
	{
		$this->meaTime = $meaTime;
		$this->apiParas["mea_time"] = $meaTime;
	}

	public function getMeaTime()
	{
		return $this->meaTime;
	}

	public function setOrderFullAmount($orderFullAmount)
	{
		$this->orderFullAmount = $orderFullAmount;
		$this->apiParas["order_full_amount"] = $orderFullAmount;
	}

	public function getOrderFullAmount()
	{
		return $this->orderFullAmount;
	}

	public function setOrderid($orderid)
	{
		$this->orderid = $orderid;
		$this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid()
	{
		return $this->orderid;
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
		return "dingtalk.oapi.catering.allowance.capacity.get.beta";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->meaTime,"meaTime");
		RequestCheckUtil::checkNotNull($this->orderFullAmount,"orderFullAmount");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

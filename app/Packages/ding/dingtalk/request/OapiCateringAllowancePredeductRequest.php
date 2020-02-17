<?php
/**
 * dingtalk API: dingtalk.oapi.catering.allowance.prededuct request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringAllowancePredeductRequest
{
	/** 
	 * 抵扣部分金额的超时时间（毫秒）
	 **/
	private $expiryTime;
	
	/** 
	 * 用餐时间
	 **/
	private $mealTime;
	
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
	
	public function setExpiryTime($expiryTime)
	{
		$this->expiryTime = $expiryTime;
		$this->apiParas["expiry_time"] = $expiryTime;
	}

	public function getExpiryTime()
	{
		return $this->expiryTime;
	}

	public function setMealTime($mealTime)
	{
		$this->mealTime = $mealTime;
		$this->apiParas["meal_time"] = $mealTime;
	}

	public function getMealTime()
	{
		return $this->mealTime;
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
		return "dingtalk.oapi.catering.allowance.prededuct";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->expiryTime,"expiryTime");
		RequestCheckUtil::checkNotNull($this->mealTime,"mealTime");
		RequestCheckUtil::checkNotNull($this->orderFullAmount,"orderFullAmount");
		RequestCheckUtil::checkNotNull($this->orderid,"orderid");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.catering.open.order.push request
 * 
 * @author auto create
 * @since 1.0, 2019.09.17
 */
class OapiCateringOpenOrderPushRequest
{
	/** 
	 * 实际支付金额
	 **/
	private $actualAmount;
	
	/** 
	 * 补贴金额
	 **/
	private $allowanceAmount;
	
	/** 
	 * 补充信息
	 **/
	private $ext;
	
	/** 
	 * 餐补规则编码
	 **/
	private $mealPlanNo;
	
	/** 
	 * 用餐时间
	 **/
	private $mealTime;
	
	/** 
	 * 菜品信息
	 **/
	private $orderDetails;
	
	/** 
	 * 应付金额
	 **/
	private $orderFullAmount;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 点餐时间
	 **/
	private $orderTime;
	
	/** 
	 * 点餐商户编号
	 **/
	private $shopId;
	
	/** 
	 * 点餐商家名称
	 **/
	private $shopName;
	
	/** 
	 * 点餐人姓名
	 **/
	private $userName;
	
	/** 
	 * 点餐人的编码，通过开放平台获取的 userId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setActualAmount($actualAmount)
	{
		$this->actualAmount = $actualAmount;
		$this->apiParas["actual_amount"] = $actualAmount;
	}

	public function getActualAmount()
	{
		return $this->actualAmount;
	}

	public function setAllowanceAmount($allowanceAmount)
	{
		$this->allowanceAmount = $allowanceAmount;
		$this->apiParas["allowance_amount"] = $allowanceAmount;
	}

	public function getAllowanceAmount()
	{
		return $this->allowanceAmount;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setMealPlanNo($mealPlanNo)
	{
		$this->mealPlanNo = $mealPlanNo;
		$this->apiParas["meal_plan_no"] = $mealPlanNo;
	}

	public function getMealPlanNo()
	{
		return $this->mealPlanNo;
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

	public function setOrderDetails($orderDetails)
	{
		$this->orderDetails = $orderDetails;
		$this->apiParas["order_details"] = $orderDetails;
	}

	public function getOrderDetails()
	{
		return $this->orderDetails;
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

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrderTime($orderTime)
	{
		$this->orderTime = $orderTime;
		$this->apiParas["order_time"] = $orderTime;
	}

	public function getOrderTime()
	{
		return $this->orderTime;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["user_name"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
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
		return "dingtalk.oapi.catering.open.order.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actualAmount,"actualAmount");
		RequestCheckUtil::checkNotNull($this->allowanceAmount,"allowanceAmount");
		RequestCheckUtil::checkNotNull($this->mealPlanNo,"mealPlanNo");
		RequestCheckUtil::checkNotNull($this->orderDetails,"orderDetails");
		RequestCheckUtil::checkNotNull($this->orderFullAmount,"orderFullAmount");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

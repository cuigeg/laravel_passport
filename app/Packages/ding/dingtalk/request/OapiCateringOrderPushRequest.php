<?php
/**
 * dingtalk API: dingtalk.oapi.catering.order.push request
 * 
 * @author auto create
 * @since 1.0, 2019.07.15
 */
class OapiCateringOrderPushRequest
{
	/** 
	 * 实收总额(分)
	 **/
	private $feeActuallyPay;
	
	/** 
	 * 折后费用(分)
	 **/
	private $feeAfterDiscount;
	
	/** 
	 * 原始费用(分)
	 **/
	private $feeOriginal;
	
	/** 
	 * 应付总额(分)
	 **/
	private $feeShouldPay;
	
	/** 
	 * 订单详情
	 **/
	private $orderDetails;
	
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 下单人的userId
	 **/
	private $ordererUserId;
	
	/** 
	 * 订单支付时间
	 **/
	private $paymentTime;
	
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	/** 
	 * 店铺名称
	 **/
	private $shopName;
	
	private $apiParas = array();
	
	public function setFeeActuallyPay($feeActuallyPay)
	{
		$this->feeActuallyPay = $feeActuallyPay;
		$this->apiParas["fee_actually_pay"] = $feeActuallyPay;
	}

	public function getFeeActuallyPay()
	{
		return $this->feeActuallyPay;
	}

	public function setFeeAfterDiscount($feeAfterDiscount)
	{
		$this->feeAfterDiscount = $feeAfterDiscount;
		$this->apiParas["fee_after_discount"] = $feeAfterDiscount;
	}

	public function getFeeAfterDiscount()
	{
		return $this->feeAfterDiscount;
	}

	public function setFeeOriginal($feeOriginal)
	{
		$this->feeOriginal = $feeOriginal;
		$this->apiParas["fee_original"] = $feeOriginal;
	}

	public function getFeeOriginal()
	{
		return $this->feeOriginal;
	}

	public function setFeeShouldPay($feeShouldPay)
	{
		$this->feeShouldPay = $feeShouldPay;
		$this->apiParas["fee_should_pay"] = $feeShouldPay;
	}

	public function getFeeShouldPay()
	{
		return $this->feeShouldPay;
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

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setOrdererUserId($ordererUserId)
	{
		$this->ordererUserId = $ordererUserId;
		$this->apiParas["orderer_user_id"] = $ordererUserId;
	}

	public function getOrdererUserId()
	{
		return $this->ordererUserId;
	}

	public function setPaymentTime($paymentTime)
	{
		$this->paymentTime = $paymentTime;
		$this->apiParas["payment_time"] = $paymentTime;
	}

	public function getPaymentTime()
	{
		return $this->paymentTime;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.catering.order.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

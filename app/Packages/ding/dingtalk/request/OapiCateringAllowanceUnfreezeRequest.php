<?php
/**
 * dingtalk API: dingtalk.oapi.catering.allowance.unfreeze request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringAllowanceUnfreezeRequest
{
	/** 
	 * 订单编号
	 **/
	private $orderId;
	
	/** 
	 * 餐补规则编码
	 **/
	private $ruleCode;
	
	/** 
	 * 点餐人userid
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setRuleCode($ruleCode)
	{
		$this->ruleCode = $ruleCode;
		$this->apiParas["rule_code"] = $ruleCode;
	}

	public function getRuleCode()
	{
		return $this->ruleCode;
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
		return "dingtalk.oapi.catering.allowance.unfreeze";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->ruleCode,"ruleCode");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

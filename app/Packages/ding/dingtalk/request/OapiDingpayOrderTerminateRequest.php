<?php
/**
 * dingtalk API: dingtalk.oapi.dingpay.order.terminate request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiDingpayOrderTerminateRequest
{
	/** 
	 * 扩展信息
	 **/
	private $extension;
	
	/** 
	 * 操作者员工号
	 **/
	private $operator;
	
	/** 
	 * dingpay单号列表
	 **/
	private $orderNos;
	
	/** 
	 * 中止原因
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setExtension($extension)
	{
		$this->extension = $extension;
		$this->apiParas["extension"] = $extension;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOrderNos($orderNos)
	{
		$this->orderNos = $orderNos;
		$this->apiParas["order_nos"] = $orderNos;
	}

	public function getOrderNos()
	{
		return $this->orderNos;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingpay.order.terminate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operator,"operator");
		RequestCheckUtil::checkNotNull($this->orderNos,"orderNos");
		RequestCheckUtil::checkMaxListSize($this->orderNos,20,"orderNos");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

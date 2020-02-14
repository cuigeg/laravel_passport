<?php
/**
 * dingtalk API: dingtalk.oapi.newmanufacturer.order.get request
 * 
 * @author auto create
 * @since 1.0, 2020.02.12
 */
class OapiNewmanufacturerOrderGetRequest
{
	/** 
	 * 订单号
	 **/
	private $number;
	
	/** 
	 * 租户
	 **/
	private $tenantId;
	
	private $apiParas = array();
	
	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setTenantId($tenantId)
	{
		$this->tenantId = $tenantId;
		$this->apiParas["tenant_id"] = $tenantId;
	}

	public function getTenantId()
	{
		return $this->tenantId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.newmanufacturer.order.get";
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

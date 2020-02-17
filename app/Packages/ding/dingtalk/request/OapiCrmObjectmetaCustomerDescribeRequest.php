<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectmeta.customer.describe request
 * 
 * @author auto create
 * @since 1.0, 2020.01.07
 */
class OapiCrmObjectmetaCustomerDescribeRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectmeta.customer.describe";
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

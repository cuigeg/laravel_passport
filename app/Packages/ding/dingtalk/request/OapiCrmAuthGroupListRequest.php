<?php
/**
 * dingtalk API: dingtalk.oapi.crm.auth.group.list request
 * 
 * @author auto create
 * @since 1.0, 2020.01.03
 */
class OapiCrmAuthGroupListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.auth.group.list";
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

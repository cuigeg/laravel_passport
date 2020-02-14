<?php
/**
 * dingtalk API: dingtalk.oapi.user.get_admin request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserGetAdminRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.get_admin";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.auth.scopes request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiAuthScopesRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.auth.scopes";
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

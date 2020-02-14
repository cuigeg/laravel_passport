<?php
/**
 * dingtalk API: dingtalk.oapi.call_back.delete_call_back request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiCallBackDeleteCallBackRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.call_back.delete_call_back";
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

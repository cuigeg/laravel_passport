<?php
/**
 * dingtalk API: dingtalk.oapi.call_back.get_call_back_failed_result request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiCallBackGetCallBackFailedResultRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.call_back.get_call_back_failed_result";
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

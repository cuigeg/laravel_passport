<?php
/**
 * dingtalk API: dingtalk.oapi.get_jsapi_ticket request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiGetJsapiTicketRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.get_jsapi_ticket";
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

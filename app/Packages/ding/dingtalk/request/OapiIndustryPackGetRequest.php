<?php
/**
 * dingtalk API: dingtalk.oapi.industry.pack.get request
 * 
 * @author auto create
 * @since 1.0, 2020.01.14
 */
class OapiIndustryPackGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.industry.pack.get";
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

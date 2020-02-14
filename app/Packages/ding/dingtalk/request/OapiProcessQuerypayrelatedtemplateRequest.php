<?php
/**
 * dingtalk API: dingtalk.oapi.process.querypayrelatedtemplate request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessQuerypayrelatedtemplateRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.querypayrelatedtemplate";
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

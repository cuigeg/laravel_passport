<?php
/**
 * dingtalk API: dingtalk.corp.blazers.unbind request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpBlazersUnbindRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.corp.blazers.unbind";
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

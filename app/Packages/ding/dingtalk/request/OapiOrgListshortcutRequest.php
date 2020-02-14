<?php
/**
 * dingtalk API: dingtalk.oapi.org.listshortcut request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiOrgListshortcutRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.listshortcut";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.crm.menu.get request
 * 
 * @author auto create
 * @since 1.0, 2020.01.14
 */
class OapiCrmMenuGetRequest
{
	/** 
	 * 0:PC端导航 1：手机端导航
	 **/
	private $clientType;
	
	private $apiParas = array();
	
	public function setClientType($clientType)
	{
		$this->clientType = $clientType;
		$this->apiParas["client_type"] = $clientType;
	}

	public function getClientType()
	{
		return $this->clientType;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.menu.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientType,"clientType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

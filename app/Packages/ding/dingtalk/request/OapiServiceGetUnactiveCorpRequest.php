<?php
/**
 * dingtalk API: dingtalk.oapi.service.get_unactive_corp request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiServiceGetUnactiveCorpRequest
{
	/** 
	 * 套件下的微应用ID
	 **/
	private $appId;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.service.get_unactive_corp";
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

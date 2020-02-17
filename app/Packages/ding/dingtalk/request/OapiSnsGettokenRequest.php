<?php
/**
 * dingtalk API: dingtalk.oapi.sns.gettoken request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSnsGettokenRequest
{
	/** 
	 * 由钉钉开放平台提供给开放应用的唯一标识
	 **/
	private $appid;
	
	/** 
	 * 由钉钉开放平台提供的密钥
	 **/
	private $appsecret;
	
	private $apiParas = array();
	
	public function setAppid($appid)
	{
		$this->appid = $appid;
		$this->apiParas["appid"] = $appid;
	}

	public function getAppid()
	{
		return $this->appid;
	}

	public function setAppsecret($appsecret)
	{
		$this->appsecret = $appsecret;
		$this->apiParas["appsecret"] = $appsecret;
	}

	public function getAppsecret()
	{
		return $this->appsecret;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.gettoken";
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

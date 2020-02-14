<?php
/**
 * dingtalk API: dingtalk.oapi.openencrypt.heartbeat request
 * 
 * @author auto create
 * @since 1.0, 2019.09.03
 */
class OapiOpenencryptHeartbeatRequest
{
	/** 
	 * 微应用id
	 **/
	private $appid;
	
	/** 
	 * xxx
	 **/
	private $extension;
	
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

	public function setExtension($extension)
	{
		$this->extension = $extension;
		$this->apiParas["extension"] = $extension;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.openencrypt.heartbeat";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appid,"appid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

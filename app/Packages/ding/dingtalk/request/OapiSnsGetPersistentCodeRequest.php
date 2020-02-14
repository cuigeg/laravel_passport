<?php
/**
 * dingtalk API: dingtalk.oapi.sns.get_persistent_code request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSnsGetPersistentCodeRequest
{
	/** 
	 * 用户授权给钉钉开放应用的临时授权码
	 **/
	private $tmpAuthCode;
	
	private $apiParas = array();
	
	public function setTmpAuthCode($tmpAuthCode)
	{
		$this->tmpAuthCode = $tmpAuthCode;
		$this->apiParas["tmp_auth_code"] = $tmpAuthCode;
	}

	public function getTmpAuthCode()
	{
		return $this->tmpAuthCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.get_persistent_code";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.sns.getuserinfo_bycode request
 * 
 * @author auto create
 * @since 1.0, 2019.05.10
 */
class OapiSnsGetuserinfoBycodeRequest
{
	/** 
	 * 登录的临时授权码
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
		return "dingtalk.oapi.sns.getuserinfo_bycode";
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

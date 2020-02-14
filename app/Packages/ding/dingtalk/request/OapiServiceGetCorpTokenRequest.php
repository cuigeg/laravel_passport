<?php
/**
 * dingtalk API: dingtalk.oapi.service.get_corp_token request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiServiceGetCorpTokenRequest
{
	/** 
	 * 授权方corpid
	 **/
	private $authCorpid;
	
	/** 
	 * 永久授权码，通过get_permanent_code获取
	 **/
	private $permanentCode;
	
	private $apiParas = array();
	
	public function setAuthCorpid($authCorpid)
	{
		$this->authCorpid = $authCorpid;
		$this->apiParas["auth_corpid"] = $authCorpid;
	}

	public function getAuthCorpid()
	{
		return $this->authCorpid;
	}

	public function setPermanentCode($permanentCode)
	{
		$this->permanentCode = $permanentCode;
		$this->apiParas["permanent_code"] = $permanentCode;
	}

	public function getPermanentCode()
	{
		return $this->permanentCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.service.get_corp_token";
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

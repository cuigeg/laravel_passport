<?php
/**
 * dingtalk API: dingtalk.oapi.service.get_auth_info request
 * 
 * @author auto create
 * @since 1.0, 2020.01.15
 */
class OapiServiceGetAuthInfoRequest
{
	/** 
	 * 授权方corpid
	 **/
	private $authCorpid;
	
	/** 
	 * 套件key
	 **/
	private $suiteKey;
	
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

	public function setSuiteKey($suiteKey)
	{
		$this->suiteKey = $suiteKey;
		$this->apiParas["suite_key"] = $suiteKey;
	}

	public function getSuiteKey()
	{
		return $this->suiteKey;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.service.get_auth_info";
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

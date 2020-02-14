<?php
/**
 * dingtalk API: dingtalk.oapi.service.activate_suite request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiServiceActivateSuiteRequest
{
	/** 
	 * 授权方corpid
	 **/
	private $authCorpid;
	
	/** 
	 * 永久授权码，从get_permanent_code接口中获取
	 **/
	private $permanentCode;
	
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

	public function setPermanentCode($permanentCode)
	{
		$this->permanentCode = $permanentCode;
		$this->apiParas["permanent_code"] = $permanentCode;
	}

	public function getPermanentCode()
	{
		return $this->permanentCode;
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
		return "dingtalk.oapi.service.activate_suite";
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

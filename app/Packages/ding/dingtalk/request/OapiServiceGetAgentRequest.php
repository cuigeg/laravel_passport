<?php
/**
 * dingtalk API: dingtalk.oapi.service.get_agent request
 * 
 * @author auto create
 * @since 1.0, 2019.12.16
 */
class OapiServiceGetAgentRequest
{
	/** 
	 * 授权企业方应用id
	 **/
	private $agentid;
	
	/** 
	 * 授权企业方corpid
	 **/
	private $authCorpid;
	
	/** 
	 * 永久授权码
	 **/
	private $permanentCode;
	
	/** 
	 * 应用套件key
	 **/
	private $suiteKey;
	
	private $apiParas = array();
	
	public function setAgentid($agentid)
	{
		$this->agentid = $agentid;
		$this->apiParas["agentid"] = $agentid;
	}

	public function getAgentid()
	{
		return $this->agentid;
	}

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
		return "dingtalk.oapi.service.get_agent";
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

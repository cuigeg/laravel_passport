<?php
/**
 * dingtalk API: dingtalk.oapi.cspace.get_custom_space request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiCspaceGetCustomSpaceRequest
{
	/** 
	 * ISV调用时传入，微应用agentId
	 **/
	private $agentId;
	
	/** 
	 * 企业调用时传入，需要为10个字节以内的字符串，仅可包含字母和数字，大小写不敏感
	 **/
	private $domain;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.cspace.get_custom_space";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.rule.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMicroappRuleDeleteRequest
{
	/** 
	 * 规则所属的微应用agentId
	 **/
	private $agentId;
	
	/** 
	 * 被删除的规则id
	 **/
	private $ruleId;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agentId"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["ruleId"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.microapp.rule.delete";
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

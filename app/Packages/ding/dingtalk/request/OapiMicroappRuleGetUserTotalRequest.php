<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.rule.get_user_total request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMicroappRuleGetUserTotalRequest
{
	/** 
	 * 规则所属的微应用agentId
	 **/
	private $agentId;
	
	/** 
	 * 需要查询的规则id集合
	 **/
	private $ruleIdList;
	
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

	public function setRuleIdList($ruleIdList)
	{
		$this->ruleIdList = $ruleIdList;
		$this->apiParas["ruleIdList"] = $ruleIdList;
	}

	public function getRuleIdList()
	{
		return $this->ruleIdList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.microapp.rule.get_user_total";
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

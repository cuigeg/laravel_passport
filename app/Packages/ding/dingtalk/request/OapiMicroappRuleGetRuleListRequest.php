<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.rule.get_rule_list request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMicroappRuleGetRuleListRequest
{
	/** 
	 * 微应用在企业内的id
	 **/
	private $agentId;
	
	/** 
	 * 用户在企业内的唯一标识
	 **/
	private $userid;
	
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

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.microapp.rule.get_rule_list";
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

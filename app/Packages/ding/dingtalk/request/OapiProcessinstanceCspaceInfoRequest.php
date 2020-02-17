<?php
/**
 * dingtalk API: dingtalk.oapi.processinstance.cspace.info request
 * 
 * @author auto create
 * @since 1.0, 2019.12.20
 */
class OapiProcessinstanceCspaceInfoRequest
{
	/** 
	 * 企业应用标识(ISV调用必须设置)
	 **/
	private $agentId;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.processinstance.cspace.info";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

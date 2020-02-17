<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.listorgbot request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpChatbotListorgbotRequest
{
	/** 
	 * 微应用id
	 **/
	private $agentId;
	
	/** 
	 * 钉钉分配的类型
	 **/
	private $type;
	
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.listorgbot";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

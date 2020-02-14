<?php
/**
 * dingtalk API: dingtalk.oapi.message.corpconversation.recall request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiMessageCorpconversationRecallRequest
{
	/** 
	 * 发送工作通知的微应用agentId
	 **/
	private $agentId;
	
	/** 
	 * 发送工作通知返回的taskId
	 **/
	private $msgTaskId;
	
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

	public function setMsgTaskId($msgTaskId)
	{
		$this->msgTaskId = $msgTaskId;
		$this->apiParas["msg_task_id"] = $msgTaskId;
	}

	public function getMsgTaskId()
	{
		return $this->msgTaskId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.message.corpconversation.recall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->msgTaskId,"msgTaskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

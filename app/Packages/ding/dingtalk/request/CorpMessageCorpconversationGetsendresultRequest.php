<?php
/**
 * dingtalk API: dingtalk.corp.message.corpconversation.getsendresult request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpMessageCorpconversationGetsendresultRequest
{
	/** 
	 * 微应用的agentid
	 **/
	private $agentId;
	
	/** 
	 * 异步任务的id
	 **/
	private $taskId;
	
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

	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.message.corpconversation.getsendresult";
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

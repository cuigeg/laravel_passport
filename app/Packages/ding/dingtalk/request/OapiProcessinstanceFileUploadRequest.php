<?php
/**
 * dingtalk API: dingtalk.oapi.processinstance.file.upload request
 * 
 * @author auto create
 * @since 1.0, 2020.01.03
 */
class OapiProcessinstanceFileUploadRequest
{
	/** 
	 * 企业应用标识
	 **/
	private $agentId;
	
	/** 
	 * 流程实例id
	 **/
	private $processInstanceId;
	
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

	public function setProcessInstanceId($processInstanceId)
	{
		$this->processInstanceId = $processInstanceId;
		$this->apiParas["process_instance_id"] = $processInstanceId;
	}

	public function getProcessInstanceId()
	{
		return $this->processInstanceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.processinstance.file.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->processInstanceId,"processInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

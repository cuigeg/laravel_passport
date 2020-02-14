<?php
/**
 * dingtalk API: dingtalk.oapi.processinstance.variable.update request
 * 
 * @author auto create
 * @since 1.0, 2019.12.20
 */
class OapiProcessinstanceVariableUpdateRequest
{
	/** 
	 * 审批实例id
	 **/
	private $processInstanceId;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 变量列表
	 **/
	private $variables;
	
	private $apiParas = array();
	
	public function setProcessInstanceId($processInstanceId)
	{
		$this->processInstanceId = $processInstanceId;
		$this->apiParas["process_instance_id"] = $processInstanceId;
	}

	public function getProcessInstanceId()
	{
		return $this->processInstanceId;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setVariables($variables)
	{
		$this->variables = $variables;
		$this->apiParas["variables"] = $variables;
	}

	public function getVariables()
	{
		return $this->variables;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.processinstance.variable.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processInstanceId,"processInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

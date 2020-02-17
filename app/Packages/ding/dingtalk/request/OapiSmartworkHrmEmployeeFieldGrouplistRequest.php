<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.field.grouplist request
 * 
 * @author auto create
 * @since 1.0, 2020.01.18
 */
class OapiSmartworkHrmEmployeeFieldGrouplistRequest
{
	/** 
	 * 微应用在企业的AgentId，不需要自定义字段可不传
	 **/
	private $agentid;
	
	private $apiParas = array();
	
	public function setAgentid($agentid)
	{
		$this->agentid = $agentid;
		$this->apiParas["agentid"] = $agentid;
	}

	public function getAgentid()
	{
		return $this->agentid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.field.grouplist";
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

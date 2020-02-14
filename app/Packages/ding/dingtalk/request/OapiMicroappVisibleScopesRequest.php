<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.visible_scopes request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMicroappVisibleScopesRequest
{
	/** 
	 * 微应用实例化id
	 **/
	private $agentId;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.microapp.visible_scopes";
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

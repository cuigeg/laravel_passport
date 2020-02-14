<?php
/**
 * dingtalk API: dingtalk.oapi.org.setshortcut request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiOrgSetshortcutRequest
{
	/** 
	 * 微应用实例id列表
	 **/
	private $agentIds;
	
	private $apiParas = array();
	
	public function setAgentIds($agentIds)
	{
		$this->agentIds = $agentIds;
		$this->apiParas["agentIds"] = $agentIds;
	}

	public function getAgentIds()
	{
		return $this->agentIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.setshortcut";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->agentIds,20,"agentIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.cspace.auth.cancel request
 * 
 * @author auto create
 * @since 1.0, 2019.10.08
 */
class OapiCspaceAuthCancelRequest
{
	/** 
	 * 微应用的agentId
	 **/
	private $agentId;
	
	/** 
	 * isv文件授权码
	 **/
	private $isvCode;
	
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

	public function setIsvCode($isvCode)
	{
		$this->isvCode = $isvCode;
		$this->apiParas["isv_code"] = $isvCode;
	}

	public function getIsvCode()
	{
		return $this->isvCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.cspace.auth.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->isvCode,"isvCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

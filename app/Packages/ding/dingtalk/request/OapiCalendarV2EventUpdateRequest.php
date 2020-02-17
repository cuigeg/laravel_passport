<?php
/**
 * dingtalk API: dingtalk.oapi.calendar.v2.event.update request
 * 
 * @author auto create
 * @since 1.0, 2019.11.22
 */
class OapiCalendarV2EventUpdateRequest
{
	/** 
	 * 开放平台应用对应的AgentId
	 **/
	private $agentid;
	
	/** 
	 * 日程创建对象
	 **/
	private $event;
	
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

	public function setEvent($event)
	{
		$this->event = $event;
		$this->apiParas["event"] = $event;
	}

	public function getEvent()
	{
		return $this->event;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.calendar.v2.event.update";
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

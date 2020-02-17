<?php
/**
 * dingtalk API: dingtalk.oapi.calendar.v2.event.cancel request
 * 
 * @author auto create
 * @since 1.0, 2019.10.30
 */
class OapiCalendarV2EventCancelRequest
{
	/** 
	 * 开放平台应用对应的AgentId
	 **/
	private $agentid;
	
	/** 
	 * 日历id,目前仅支持传“primary”，表示“我的日程”下的日程
	 **/
	private $calendarId;
	
	/** 
	 * 加密后的日程Id
	 **/
	private $eventId;
	
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

	public function setCalendarId($calendarId)
	{
		$this->calendarId = $calendarId;
		$this->apiParas["calendar_id"] = $calendarId;
	}

	public function getCalendarId()
	{
		return $this->calendarId;
	}

	public function setEventId($eventId)
	{
		$this->eventId = $eventId;
		$this->apiParas["event_id"] = $eventId;
	}

	public function getEventId()
	{
		return $this->eventId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.calendar.v2.event.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->calendarId,"calendarId");
		RequestCheckUtil::checkMaxLength($this->calendarId,64,"calendarId");
		RequestCheckUtil::checkNotNull($this->eventId,"eventId");
		RequestCheckUtil::checkMaxLength($this->eventId,64,"eventId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

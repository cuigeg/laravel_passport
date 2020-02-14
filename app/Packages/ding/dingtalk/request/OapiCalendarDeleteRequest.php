<?php
/**
 * dingtalk API: dingtalk.oapi.calendar.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiCalendarDeleteRequest
{
	/** 
	 * 日程id
	 **/
	private $calendarId;
	
	/** 
	 * 员工id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setCalendarId($calendarId)
	{
		$this->calendarId = $calendarId;
		$this->apiParas["calendar_id"] = $calendarId;
	}

	public function getCalendarId()
	{
		return $this->calendarId;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.calendar.delete";
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

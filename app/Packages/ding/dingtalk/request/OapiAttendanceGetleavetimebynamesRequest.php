<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.getleavetimebynames request
 * 
 * @author auto create
 * @since 1.0, 2019.09.24
 */
class OapiAttendanceGetleavetimebynamesRequest
{
	/** 
	 * 开始时间
	 **/
	private $fromDate;
	
	/** 
	 * 假期名称
	 **/
	private $leaveNames;
	
	/** 
	 * 结束时间
	 **/
	private $toDate;
	
	/** 
	 * 用户的userId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setFromDate($fromDate)
	{
		$this->fromDate = $fromDate;
		$this->apiParas["from_date"] = $fromDate;
	}

	public function getFromDate()
	{
		return $this->fromDate;
	}

	public function setLeaveNames($leaveNames)
	{
		$this->leaveNames = $leaveNames;
		$this->apiParas["leave_names"] = $leaveNames;
	}

	public function getLeaveNames()
	{
		return $this->leaveNames;
	}

	public function setToDate($toDate)
	{
		$this->toDate = $toDate;
		$this->apiParas["to_date"] = $toDate;
	}

	public function getToDate()
	{
		return $this->toDate;
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
		return "dingtalk.oapi.attendance.getleavetimebynames";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->leaveNames,20,"leaveNames");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

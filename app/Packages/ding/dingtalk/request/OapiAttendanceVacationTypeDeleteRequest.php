<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.vacation.type.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceVacationTypeDeleteRequest
{
	/** 
	 * 假期类型唯一标识
	 **/
	private $leaveCode;
	
	/** 
	 * 操作员ID
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setLeaveCode($leaveCode)
	{
		$this->leaveCode = $leaveCode;
		$this->apiParas["leave_code"] = $leaveCode;
	}

	public function getLeaveCode()
	{
		return $this->leaveCode;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.vacation.type.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->leaveCode,"leaveCode");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.schedule.async request
 * 
 * @author auto create
 * @since 1.0, 2019.09.04
 */
class OapiAttendanceGroupScheduleAsyncRequest
{
	/** 
	 * 考勤组id
	 **/
	private $groupId;
	
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	/** 
	 * 系统自动生成
	 **/
	private $schedules;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function setSchedules($schedules)
	{
		$this->schedules = $schedules;
		$this->apiParas["schedules"] = $schedules;
	}

	public function getSchedules()
	{
		return $this->schedules;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.schedule.async";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

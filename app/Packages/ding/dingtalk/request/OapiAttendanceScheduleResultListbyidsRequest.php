<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.schedule.result.listbyids request
 * 
 * @author auto create
 * @since 1.0, 2019.10.28
 */
class OapiAttendanceScheduleResultListbyidsRequest
{
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	/** 
	 * 排班ids
	 **/
	private $scheduleIds;
	
	private $apiParas = array();
	
	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function setScheduleIds($scheduleIds)
	{
		$this->scheduleIds = $scheduleIds;
		$this->apiParas["schedule_ids"] = $scheduleIds;
	}

	public function getScheduleIds()
	{
		return $this->scheduleIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.schedule.result.listbyids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
		RequestCheckUtil::checkNotNull($this->scheduleIds,"scheduleIds");
		RequestCheckUtil::checkMaxListSize($this->scheduleIds,100,"scheduleIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.schedule.listbyday request
 * 
 * @author auto create
 * @since 1.0, 2019.08.07
 */
class OapiAttendanceScheduleListbydayRequest
{
	/** 
	 * 查询那天的数据
	 **/
	private $dateTime;
	
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	/** 
	 * 用户userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setDateTime($dateTime)
	{
		$this->dateTime = $dateTime;
		$this->apiParas["date_time"] = $dateTime;
	}

	public function getDateTime()
	{
		return $this->dateTime;
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

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.schedule.listbyday";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dateTime,"dateTime");
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

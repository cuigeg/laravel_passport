<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.shift.search request
 * 
 * @author auto create
 * @since 1.0, 2019.07.31
 */
class OapiAttendanceShiftSearchRequest
{
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	/** 
	 * 班次名称
	 **/
	private $shiftName;
	
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

	public function setShiftName($shiftName)
	{
		$this->shiftName = $shiftName;
		$this->apiParas["shift_name"] = $shiftName;
	}

	public function getShiftName()
	{
		return $this->shiftName;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.shift.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
		RequestCheckUtil::checkNotNull($this->shiftName,"shiftName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.shift.history.query request
 * 
 * @author auto create
 * @since 1.0, 2019.07.31
 */
class OapiAttendanceShiftHistoryQueryRequest
{
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	/** 
	 * 班次id
	 **/
	private $shiftId;
	
	/** 
	 * 班次版本
	 **/
	private $version;
	
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

	public function setShiftId($shiftId)
	{
		$this->shiftId = $shiftId;
		$this->apiParas["shift_id"] = $shiftId;
	}

	public function getShiftId()
	{
		return $this->shiftId;
	}

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.shift.history.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
		RequestCheckUtil::checkNotNull($this->shiftId,"shiftId");
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

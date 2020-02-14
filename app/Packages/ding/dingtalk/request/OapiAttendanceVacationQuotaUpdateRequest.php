<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.vacation.quota.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceVacationQuotaUpdateRequest
{
	/** 
	 * 待更新的假期余额记录
	 **/
	private $leaveQuotas;
	
	/** 
	 * 操作者ID
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setLeaveQuotas($leaveQuotas)
	{
		$this->leaveQuotas = $leaveQuotas;
		$this->apiParas["leave_quotas"] = $leaveQuotas;
	}

	public function getLeaveQuotas()
	{
		return $this->leaveQuotas;
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
		return "dingtalk.oapi.attendance.vacation.quota.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

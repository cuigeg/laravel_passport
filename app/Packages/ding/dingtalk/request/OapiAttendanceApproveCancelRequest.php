<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.approve.cancel request
 * 
 * @author auto create
 * @since 1.0, 2019.08.21
 */
class OapiAttendanceApproveCancelRequest
{
	/** 
	 * 审批单全局唯一id，最大长度100个字符
	 **/
	private $approveId;
	
	/** 
	 * 员工的user_id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setApproveId($approveId)
	{
		$this->approveId = $approveId;
		$this->apiParas["approve_id"] = $approveId;
	}

	public function getApproveId()
	{
		return $this->approveId;
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
		return "dingtalk.oapi.attendance.approve.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->approveId,100,"approveId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

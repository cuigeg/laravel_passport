<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.getusergroup request
 * 
 * @author auto create
 * @since 1.0, 2020.01.19
 */
class OapiAttendanceGetusergroupRequest
{
	/** 
	 * 员工在企业内的UserID，企业用来唯一标识用户的字段。
	 **/
	private $userid;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.attendance.getusergroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

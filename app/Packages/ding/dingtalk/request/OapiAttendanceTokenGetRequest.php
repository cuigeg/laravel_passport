<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.token.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceTokenGetRequest
{
	/** 
	 * 操作人id
	 **/
	private $opUserid;
	
	/** 
	 * 被操作人id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
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
		return "dingtalk.oapi.attendance.token.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

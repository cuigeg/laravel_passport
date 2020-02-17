<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceGroupDeleteRequest
{
	/** 
	 * 考勤组id
	 **/
	private $groupKey;
	
	/** 
	 * 操作人userId
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setGroupKey($groupKey)
	{
		$this->groupKey = $groupKey;
		$this->apiParas["group_key"] = $groupKey;
	}

	public function getGroupKey()
	{
		return $this->groupKey;
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
		return "dingtalk.oapi.attendance.group.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupKey,"groupKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

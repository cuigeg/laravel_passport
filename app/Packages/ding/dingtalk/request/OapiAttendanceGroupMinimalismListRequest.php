<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.minimalism.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.31
 */
class OapiAttendanceGroupMinimalismListRequest
{
	/** 
	 * 游标
	 **/
	private $cursor;
	
	/** 
	 * 操作者userId
	 **/
	private $opUserId;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.minimalism.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

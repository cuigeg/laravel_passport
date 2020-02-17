<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.getleavestatus request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceGetleavestatusRequest
{
	/** 
	 * 结束时间，时间戳，支持最多180天的查询
	 **/
	private $endTime;
	
	/** 
	 * 分页偏移，非负整数
	 **/
	private $offset;
	
	/** 
	 * 分页大小，正整数，最大20
	 **/
	private $size;
	
	/** 
	 * 开始时间 ，时间戳，支持最多180天的查询
	 **/
	private $startTime;
	
	/** 
	 * 待查询用户id列表，支持最多100个用户的批量查询
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setUseridList($useridList)
	{
		$this->useridList = $useridList;
		$this->apiParas["userid_list"] = $useridList;
	}

	public function getUseridList()
	{
		return $this->useridList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.getleavestatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,20,"size");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->useridList,"useridList");
		RequestCheckUtil::checkMaxListSize($this->useridList,100,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

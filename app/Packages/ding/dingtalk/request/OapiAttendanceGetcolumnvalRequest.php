<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.getcolumnval request
 * 
 * @author auto create
 * @since 1.0, 2019.11.25
 */
class OapiAttendanceGetcolumnvalRequest
{
	/** 
	 * 列id，多值用英文逗号分隔
	 **/
	private $columnIdList;
	
	/** 
	 * 开始时间
	 **/
	private $fromDate;
	
	/** 
	 * 结束时间
	 **/
	private $toDate;
	
	/** 
	 * 用户的userId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setColumnIdList($columnIdList)
	{
		$this->columnIdList = $columnIdList;
		$this->apiParas["column_id_list"] = $columnIdList;
	}

	public function getColumnIdList()
	{
		return $this->columnIdList;
	}

	public function setFromDate($fromDate)
	{
		$this->fromDate = $fromDate;
		$this->apiParas["from_date"] = $fromDate;
	}

	public function getFromDate()
	{
		return $this->fromDate;
	}

	public function setToDate($toDate)
	{
		$this->toDate = $toDate;
		$this->apiParas["to_date"] = $toDate;
	}

	public function getToDate()
	{
		return $this->toDate;
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
		return "dingtalk.oapi.attendance.getcolumnval";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->columnIdList,20,"columnIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.vacation.type.list request
 * 
 * @author auto create
 * @since 1.0, 2019.10.10
 */
class OapiAttendanceVacationTypeListRequest
{
	/** 
	 * 操作员ID
	 **/
	private $opUserid;
	
	/** 
	 * 空:开放接口定义假期类型;all:所有假期类型
	 **/
	private $vacationSource;
	
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

	public function setVacationSource($vacationSource)
	{
		$this->vacationSource = $vacationSource;
		$this->apiParas["vacation_source"] = $vacationSource;
	}

	public function getVacationSource()
	{
		return $this->vacationSource;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.vacation.type.list";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.test.getclass request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceTestGetclassRequest
{
	/** 
	 * 班次
	 **/
	private $classId;
	
	private $apiParas = array();
	
	public function setClassId($classId)
	{
		$this->classId = $classId;
		$this->apiParas["classId"] = $classId;
	}

	public function getClassId()
	{
		return $this->classId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.test.getclass";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

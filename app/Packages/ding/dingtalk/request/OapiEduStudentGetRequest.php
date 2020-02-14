<?php
/**
 * dingtalk API: dingtalk.oapi.edu.student.get request
 * 
 * @author auto create
 * @since 1.0, 2020.01.14
 */
class OapiEduStudentGetRequest
{
	/** 
	 * 班级ID
	 **/
	private $classId;
	
	/** 
	 * 学生ID
	 **/
	private $studentUserid;
	
	private $apiParas = array();
	
	public function setClassId($classId)
	{
		$this->classId = $classId;
		$this->apiParas["class_id"] = $classId;
	}

	public function getClassId()
	{
		return $this->classId;
	}

	public function setStudentUserid($studentUserid)
	{
		$this->studentUserid = $studentUserid;
		$this->apiParas["student_userid"] = $studentUserid;
	}

	public function getStudentUserid()
	{
		return $this->studentUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.student.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classId,"classId");
		RequestCheckUtil::checkNotNull($this->studentUserid,"studentUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

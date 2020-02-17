<?php
/**
 * dingtalk API: dingtalk.oapi.edu.face.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.14
 */
class OapiEduFaceGetRequest
{
	/** 
	 * 班级id
	 **/
	private $classId;
	
	/** 
	 * 员工id
	 **/
	private $userid;
	
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
		return "dingtalk.oapi.edu.face.get";
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

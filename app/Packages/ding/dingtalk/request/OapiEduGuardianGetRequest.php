<?php
/**
 * dingtalk API: dingtalk.oapi.edu.guardian.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.28
 */
class OapiEduGuardianGetRequest
{
	/** 
	 * 班级ID
	 **/
	private $classId;
	
	/** 
	 * 家长ID
	 **/
	private $guardianUserid;
	
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

	public function setGuardianUserid($guardianUserid)
	{
		$this->guardianUserid = $guardianUserid;
		$this->apiParas["guardian_userid"] = $guardianUserid;
	}

	public function getGuardianUserid()
	{
		return $this->guardianUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.guardian.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classId,"classId");
		RequestCheckUtil::checkNotNull($this->guardianUserid,"guardianUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

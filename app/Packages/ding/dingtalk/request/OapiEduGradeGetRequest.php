<?php
/**
 * dingtalk API: dingtalk.oapi.edu.grade.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiEduGradeGetRequest
{
	/** 
	 * 年级ID
	 **/
	private $gradeId;
	
	private $apiParas = array();
	
	public function setGradeId($gradeId)
	{
		$this->gradeId = $gradeId;
		$this->apiParas["grade_id"] = $gradeId;
	}

	public function getGradeId()
	{
		return $this->gradeId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.grade.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gradeId,"gradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

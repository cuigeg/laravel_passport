<?php
/**
 * dingtalk API: dingtalk.oapi.edu.grade.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiEduGradeListRequest
{
	/** 
	 * 学段ID
	 **/
	private $periodId;
	
	private $apiParas = array();
	
	public function setPeriodId($periodId)
	{
		$this->periodId = $periodId;
		$this->apiParas["period_id"] = $periodId;
	}

	public function getPeriodId()
	{
		return $this->periodId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.grade.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->periodId,"periodId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

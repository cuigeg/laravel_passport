<?php
/**
 * dingtalk API: dingtalk.oapi.edu.campus.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiEduCampusGetRequest
{
	/** 
	 * 校区ID
	 **/
	private $campusId;
	
	private $apiParas = array();
	
	public function setCampusId($campusId)
	{
		$this->campusId = $campusId;
		$this->apiParas["campus_id"] = $campusId;
	}

	public function getCampusId()
	{
		return $this->campusId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.campus.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campusId,"campusId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

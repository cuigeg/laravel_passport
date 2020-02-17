<?php
/**
 * dingtalk API: dingtalk.oapi.report.getunreadcount request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiReportGetunreadcountRequest
{
	/** 
	 * 员工id
	 **/
	private $userid;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.report.getunreadcount";
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

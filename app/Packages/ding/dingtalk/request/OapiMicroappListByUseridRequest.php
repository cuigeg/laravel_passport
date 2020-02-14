<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.list_by_userid request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMicroappListByUseridRequest
{
	/** 
	 * 员工userid
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
		return "dingtalk.oapi.microapp.list_by_userid";
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

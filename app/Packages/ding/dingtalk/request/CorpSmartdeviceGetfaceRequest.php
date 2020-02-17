<?php
/**
 * dingtalk API: dingtalk.corp.smartdevice.getface request
 * 
 * @author auto create
 * @since 1.0, 2019.09.03
 */
class CorpSmartdeviceGetfaceRequest
{
	/** 
	 * 员工ID
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
		return "dingtalk.corp.smartdevice.getface";
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

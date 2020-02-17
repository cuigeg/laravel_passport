<?php
/**
 * dingtalk API: dingtalk.smartwork.blackboard.listtopten request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class SmartworkBlackboardListtoptenRequest
{
	/** 
	 * 用户id
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
		return "dingtalk.smartwork.blackboard.listtopten";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.ccoservice.servicegroup.addmember request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CcoserviceServicegroupAddmemberRequest
{
	/** 
	 * 服务群id
	 **/
	private $openGroupId;
	
	/** 
	 * 企业员工id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setOpenGroupId($openGroupId)
	{
		$this->openGroupId = $openGroupId;
		$this->apiParas["open_group_id"] = $openGroupId;
	}

	public function getOpenGroupId()
	{
		return $this->openGroupId;
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
		return "dingtalk.ccoservice.servicegroup.addmember";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openGroupId,"openGroupId");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

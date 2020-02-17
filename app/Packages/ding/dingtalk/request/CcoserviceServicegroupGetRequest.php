<?php
/**
 * dingtalk API: dingtalk.ccoservice.servicegroup.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CcoserviceServicegroupGetRequest
{
	/** 
	 * 服务群id
	 **/
	private $openGroupId;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.ccoservice.servicegroup.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openGroupId,"openGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

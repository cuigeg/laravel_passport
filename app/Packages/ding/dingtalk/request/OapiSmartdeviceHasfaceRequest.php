<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.hasface request
 * 
 * @author auto create
 * @since 1.0, 2019.12.18
 */
class OapiSmartdeviceHasfaceRequest
{
	/** 
	 * 查询用userid列表
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setUseridList($useridList)
	{
		$this->useridList = $useridList;
		$this->apiParas["userid_list"] = $useridList;
	}

	public function getUseridList()
	{
		return $this->useridList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.hasface";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->useridList,"useridList");
		RequestCheckUtil::checkMaxListSize($this->useridList,100,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

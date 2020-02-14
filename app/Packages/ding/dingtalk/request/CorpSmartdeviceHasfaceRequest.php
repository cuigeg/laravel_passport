<?php
/**
 * dingtalk API: dingtalk.corp.smartdevice.hasface request
 * 
 * @author auto create
 * @since 1.0, 2019.12.17
 */
class CorpSmartdeviceHasfaceRequest
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
		return "dingtalk.corp.smartdevice.hasface";
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

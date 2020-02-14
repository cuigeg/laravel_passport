<?php
/**
 * dingtalk API: dingtalk.oapi.user.can_access_microapp request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserCanAccessMicroappRequest
{
	/** 
	 * 微应用id
	 **/
	private $appId;
	
	/** 
	 * 员工唯一标识ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["appId"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["userId"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.can_access_microapp";
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

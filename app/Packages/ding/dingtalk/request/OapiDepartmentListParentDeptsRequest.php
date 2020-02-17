<?php
/**
 * dingtalk API: dingtalk.oapi.department.list_parent_depts request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiDepartmentListParentDeptsRequest
{
	/** 
	 * 用户userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.department.list_parent_depts";
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

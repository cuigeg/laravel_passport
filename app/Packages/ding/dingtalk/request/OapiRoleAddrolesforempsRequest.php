<?php
/**
 * dingtalk API: dingtalk.oapi.role.addrolesforemps request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiRoleAddrolesforempsRequest
{
	/** 
	 * 角色id list
	 **/
	private $roleIds;
	
	/** 
	 * 员工id list
	 **/
	private $userIds;
	
	private $apiParas = array();
	
	public function setRoleIds($roleIds)
	{
		$this->roleIds = $roleIds;
		$this->apiParas["roleIds"] = $roleIds;
	}

	public function getRoleIds()
	{
		return $this->roleIds;
	}

	public function setUserIds($userIds)
	{
		$this->userIds = $userIds;
		$this->apiParas["userIds"] = $userIds;
	}

	public function getUserIds()
	{
		return $this->userIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.role.addrolesforemps";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleIds,"roleIds");
		RequestCheckUtil::checkMaxListSize($this->roleIds,20,"roleIds");
		RequestCheckUtil::checkNotNull($this->userIds,"userIds");
		RequestCheckUtil::checkMaxListSize($this->userIds,20,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

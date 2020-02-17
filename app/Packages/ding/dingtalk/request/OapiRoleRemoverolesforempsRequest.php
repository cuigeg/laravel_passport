<?php
/**
 * dingtalk API: dingtalk.oapi.role.removerolesforemps request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiRoleRemoverolesforempsRequest
{
	/** 
	 * 角色标签id
	 **/
	private $roleIds;
	
	/** 
	 * 用户userId
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
		return "dingtalk.oapi.role.removerolesforemps";
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
		RequestCheckUtil::checkMaxListSize($this->userIds,100,"userIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

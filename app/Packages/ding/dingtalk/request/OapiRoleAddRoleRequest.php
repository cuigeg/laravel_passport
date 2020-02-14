<?php
/**
 * dingtalk API: dingtalk.oapi.role.add_role request
 * 
 * @author auto create
 * @since 1.0, 2018.07.02
 */
class OapiRoleAddRoleRequest
{
	/** 
	 * 角色组id
	 **/
	private $groupId;
	
	/** 
	 * 角色名称
	 **/
	private $roleName;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setRoleName($roleName)
	{
		$this->roleName = $roleName;
		$this->apiParas["roleName"] = $roleName;
	}

	public function getRoleName()
	{
		return $this->roleName;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.role.add_role";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->roleName,"roleName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

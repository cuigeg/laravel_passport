<?php
/**
 * dingtalk API: dingtalk.oapi.role.update_role request
 * 
 * @author auto create
 * @since 1.0, 2018.07.02
 */
class OapiRoleUpdateRoleRequest
{
	/** 
	 * 角色id
	 **/
	private $roleId;
	
	/** 
	 * 角色名称
	 **/
	private $roleName;
	
	private $apiParas = array();
	
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["roleId"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
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
		return "dingtalk.oapi.role.update_role";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleId,"roleId");
		RequestCheckUtil::checkNotNull($this->roleName,"roleName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

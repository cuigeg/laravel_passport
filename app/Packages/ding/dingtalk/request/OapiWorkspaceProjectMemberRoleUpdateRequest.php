<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.member.role.update request
 * 
 * @author auto create
 * @since 1.0, 2019.09.16
 */
class OapiWorkspaceProjectMemberRoleUpdateRequest
{
	/** 
	 * 成员设置角色
	 **/
	private $role;
	
	private $apiParas = array();
	
	public function setRole($role)
	{
		$this->role = $role;
		$this->apiParas["role"] = $role;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.member.role.update";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.role.visible.set request
 * 
 * @author auto create
 * @since 1.0, 2019.10.18
 */
class OapiRoleVisibleSetRequest
{
	/** 
	 * roleId
	 **/
	private $roleId;
	
	/** 
	 * roleId可见的roleIdList
	 **/
	private $visibleRoleIds;
	
	private $apiParas = array();
	
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["role_id"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	public function setVisibleRoleIds($visibleRoleIds)
	{
		$this->visibleRoleIds = $visibleRoleIds;
		$this->apiParas["visible_role_ids"] = $visibleRoleIds;
	}

	public function getVisibleRoleIds()
	{
		return $this->visibleRoleIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.role.visible.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleId,"roleId");
		RequestCheckUtil::checkNotNull($this->visibleRoleIds,"visibleRoleIds");
		RequestCheckUtil::checkMaxListSize($this->visibleRoleIds,50,"visibleRoleIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

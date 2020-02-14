<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.member.query request
 * 
 * @author auto create
 * @since 1.0, 2019.09.16
 */
class OapiWorkspaceProjectMemberQueryRequest
{
	/** 
	 * 查询项目成员参数 最多20个
	 **/
	private $members;
	
	private $apiParas = array();
	
	public function setMembers($members)
	{
		$this->members = $members;
		$this->apiParas["members"] = $members;
	}

	public function getMembers()
	{
		return $this->members;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.member.query";
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

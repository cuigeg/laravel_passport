<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.role.create request
 * 
 * @author auto create
 * @since 1.0, 2019.09.16
 */
class OapiWorkspaceProjectRoleCreateRequest
{
	/** 
	 * 创建角色参数
	 **/
	private $tags;
	
	private $apiParas = array();
	
	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.role.create";
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

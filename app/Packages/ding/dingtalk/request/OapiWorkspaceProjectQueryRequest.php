<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.query request
 * 
 * @author auto create
 * @since 1.0, 2020.01.13
 */
class OapiWorkspaceProjectQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.query";
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

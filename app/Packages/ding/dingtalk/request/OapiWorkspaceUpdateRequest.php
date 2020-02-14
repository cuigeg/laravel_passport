<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.update request
 * 
 * @author auto create
 * @since 1.0, 2020.01.17
 */
class OapiWorkspaceUpdateRequest
{
	/** 
	 * 修改项目/圈子信息
	 **/
	private $updateInfo;
	
	private $apiParas = array();
	
	public function setUpdateInfo($updateInfo)
	{
		$this->updateInfo = $updateInfo;
		$this->apiParas["update_info"] = $updateInfo;
	}

	public function getUpdateInfo()
	{
		return $this->updateInfo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.update";
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

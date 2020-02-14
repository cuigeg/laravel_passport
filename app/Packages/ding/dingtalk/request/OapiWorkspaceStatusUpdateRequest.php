<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.status.update request
 * 
 * @author auto create
 * @since 1.0, 2020.01.16
 */
class OapiWorkspaceStatusUpdateRequest
{
	/** 
	 * 更新状态
	 **/
	private $updateStatus;
	
	private $apiParas = array();
	
	public function setUpdateStatus($updateStatus)
	{
		$this->updateStatus = $updateStatus;
		$this->apiParas["update_status"] = $updateStatus;
	}

	public function getUpdateStatus()
	{
		return $this->updateStatus;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.status.update";
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

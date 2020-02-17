<?php
/**
 * dingtalk API: dingtalk.oapi.workbench.shortcut.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiWorkbenchShortcutDeleteRequest
{
	/** 
	 * 应用ID
	 **/
	private $appId;
	
	/** 
	 * 系统交互唯一流水号(ISV维度下不可重复)
	 **/
	private $bizNo;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workbench.shortcut.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->bizNo,"bizNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

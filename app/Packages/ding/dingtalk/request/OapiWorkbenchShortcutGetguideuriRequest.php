<?php
/**
 * dingtalk API: dingtalk.oapi.workbench.shortcut.getguideuri request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiWorkbenchShortcutGetguideuriRequest
{
	/** 
	 * ISV微应用ID
	 **/
	private $appId;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workbench.shortcut.getguideuri";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

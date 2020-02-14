<?php
/**
 * dingtalk API: dingtalk.oapi.bipaas.menu.publish request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiBipaasMenuPublishRequest
{
	/** 
	 * 金融云租户ID
	 **/
	private $antcloudTenantId;
	
	private $apiParas = array();
	
	public function setAntcloudTenantId($antcloudTenantId)
	{
		$this->antcloudTenantId = $antcloudTenantId;
		$this->apiParas["antcloud_tenant_id"] = $antcloudTenantId;
	}

	public function getAntcloudTenantId()
	{
		return $this->antcloudTenantId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.bipaas.menu.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->antcloudTenantId,"antcloudTenantId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

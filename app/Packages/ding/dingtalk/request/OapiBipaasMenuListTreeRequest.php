<?php
/**
 * dingtalk API: dingtalk.oapi.bipaas.menu.list_tree request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiBipaasMenuListTreeRequest
{
	/** 
	 * 金融云租户 ID
	 **/
	private $antcloudTenantId;
	
	/** 
	 * 是否已发布菜单
	 **/
	private $published;
	
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

	public function setPublished($published)
	{
		$this->published = $published;
		$this->apiParas["published"] = $published;
	}

	public function getPublished()
	{
		return $this->published;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.bipaas.menu.list_tree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->antcloudTenantId,"antcloudTenantId");
		RequestCheckUtil::checkNotNull($this->published,"published");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

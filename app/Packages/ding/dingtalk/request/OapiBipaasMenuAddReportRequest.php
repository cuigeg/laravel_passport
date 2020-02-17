<?php
/**
 * dingtalk API: dingtalk.oapi.bipaas.menu.add_report request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiBipaasMenuAddReportRequest
{
	/** 
	 * 金融云租户ID信息
	 **/
	private $antcloudTenantId;
	
	/** 
	 * 智能参谋菜单ID
	 **/
	private $menuId;
	
	/** 
	 * 报表ID列表
	 **/
	private $reportIds;
	
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

	public function setMenuId($menuId)
	{
		$this->menuId = $menuId;
		$this->apiParas["menu_id"] = $menuId;
	}

	public function getMenuId()
	{
		return $this->menuId;
	}

	public function setReportIds($reportIds)
	{
		$this->reportIds = $reportIds;
		$this->apiParas["report_ids"] = $reportIds;
	}

	public function getReportIds()
	{
		return $this->reportIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.bipaas.menu.add_report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->antcloudTenantId,"antcloudTenantId");
		RequestCheckUtil::checkNotNull($this->menuId,"menuId");
		RequestCheckUtil::checkNotNull($this->reportIds,"reportIds");
		RequestCheckUtil::checkMaxListSize($this->reportIds,20,"reportIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

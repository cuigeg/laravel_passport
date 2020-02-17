<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.master.save request
 * 
 * @author auto create
 * @since 1.0, 2019.12.04
 */
class OapiSmartworkHrmMasterSaveRequest
{
	/** 
	 * 业务数据列表
	 **/
	private $bizData;
	
	/** 
	 * 业务方id，接入前系统分配
	 **/
	private $tenantId;
	
	private $apiParas = array();
	
	public function setBizData($bizData)
	{
		$this->bizData = $bizData;
		$this->apiParas["biz_data"] = $bizData;
	}

	public function getBizData()
	{
		return $this->bizData;
	}

	public function setTenantId($tenantId)
	{
		$this->tenantId = $tenantId;
		$this->apiParas["tenant_id"] = $tenantId;
	}

	public function getTenantId()
	{
		return $this->tenantId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.master.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tenantId,"tenantId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

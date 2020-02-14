<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.master.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.01.06
 */
class OapiSmartworkHrmMasterDeleteRequest
{
	/** 
	 * 业务数据
	 **/
	private $bizData;
	
	/** 
	 * 业务方id(由系统统一分配)
	 **/
	private $tenantid;
	
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

	public function setTenantid($tenantid)
	{
		$this->tenantid = $tenantid;
		$this->apiParas["tenantid"] = $tenantid;
	}

	public function getTenantid()
	{
		return $this->tenantid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.master.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tenantid,"tenantid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

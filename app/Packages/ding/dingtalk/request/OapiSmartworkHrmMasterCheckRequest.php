<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.master.check request
 * 
 * @author auto create
 * @since 1.0, 2019.12.04
 */
class OapiSmartworkHrmMasterCheckRequest
{
	/** 
	 * 业务UK唯一确定一条流水
	 **/
	private $bizUk;
	
	/** 
	 * 业务方id(由系统统一分配)
	 **/
	private $tenantid;
	
	private $apiParas = array();
	
	public function setBizUk($bizUk)
	{
		$this->bizUk = $bizUk;
		$this->apiParas["biz_uk"] = $bizUk;
	}

	public function getBizUk()
	{
		return $this->bizUk;
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
		return "dingtalk.oapi.smartwork.hrm.master.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizUk,"bizUk");
		RequestCheckUtil::checkMaxListSize($this->bizUk,20,"bizUk");
		RequestCheckUtil::checkNotNull($this->tenantid,"tenantid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

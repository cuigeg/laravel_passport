<?php
/**
 * dingtalk API: dingtalk.oapi.catering.cooplist.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringCooplistGetRequest
{
	/** 
	 * 合作状态：1-申请合作 2-已合作
	 **/
	private $coopStatus;
	
	/** 
	 * 数据起始index
	 **/
	private $offSet;
	
	/** 
	 * pageSize
	 **/
	private $pgSize;
	
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setCoopStatus($coopStatus)
	{
		$this->coopStatus = $coopStatus;
		$this->apiParas["coop_status"] = $coopStatus;
	}

	public function getCoopStatus()
	{
		return $this->coopStatus;
	}

	public function setOffSet($offSet)
	{
		$this->offSet = $offSet;
		$this->apiParas["off_set"] = $offSet;
	}

	public function getOffSet()
	{
		return $this->offSet;
	}

	public function setPgSize($pgSize)
	{
		$this->pgSize = $pgSize;
		$this->apiParas["pg_size"] = $pgSize;
	}

	public function getPgSize()
	{
		return $this->pgSize;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.catering.cooplist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->coopStatus,"coopStatus");
		RequestCheckUtil::checkNotNull($this->offSet,"offSet");
		RequestCheckUtil::checkNotNull($this->pgSize,"pgSize");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

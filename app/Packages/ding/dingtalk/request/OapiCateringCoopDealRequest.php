<?php
/**
 * dingtalk API: dingtalk.oapi.catering.coop.deal request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringCoopDealRequest
{
	/** 
	 * 2同意申请，3拒绝申请，7已合作时解除合作
	 **/
	private $coopStatus;
	
	/** 
	 * 申请企业的corpId
	 **/
	private $corpEndCorpId;
	
	/** 
	 * 商铺id
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

	public function setCorpEndCorpId($corpEndCorpId)
	{
		$this->corpEndCorpId = $corpEndCorpId;
		$this->apiParas["corp_end_corp_id"] = $corpEndCorpId;
	}

	public function getCorpEndCorpId()
	{
		return $this->corpEndCorpId;
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
		return "dingtalk.oapi.catering.coop.deal";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->coopStatus,"coopStatus");
		RequestCheckUtil::checkNotNull($this->corpEndCorpId,"corpEndCorpId");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.catering.coopcontact.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringCoopcontactGetRequest
{
	/** 
	 * 呼叫方的userId
	 **/
	private $callerUserid;
	
	/** 
	 * 合作企业的corpId
	 **/
	private $corpEndCorpId;
	
	/** 
	 * 店铺id
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setCallerUserid($callerUserid)
	{
		$this->callerUserid = $callerUserid;
		$this->apiParas["caller_userid"] = $callerUserid;
	}

	public function getCallerUserid()
	{
		return $this->callerUserid;
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
		return "dingtalk.oapi.catering.coopcontact.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->callerUserid,"callerUserid");
		RequestCheckUtil::checkNotNull($this->corpEndCorpId,"corpEndCorpId");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

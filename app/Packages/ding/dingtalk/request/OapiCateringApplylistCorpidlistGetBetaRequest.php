<?php
/**
 * dingtalk API: dingtalk.oapi.catering.applylist.corpidlist.get.beta request
 * 
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class OapiCateringApplylistCorpidlistGetBetaRequest
{
	/** 
	 * 店铺id列表
	 **/
	private $shopIdList;
	
	private $apiParas = array();
	
	public function setShopIdList($shopIdList)
	{
		$this->shopIdList = $shopIdList;
		$this->apiParas["shop_id_list"] = $shopIdList;
	}

	public function getShopIdList()
	{
		return $this->shopIdList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.catering.applylist.corpidlist.get.beta";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shopIdList,"shopIdList");
		RequestCheckUtil::checkMaxListSize($this->shopIdList,20,"shopIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

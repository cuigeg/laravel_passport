<?php
/**
 * dingtalk API: dingtalk.oapi.catering.applylist.corpidlist.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.13
 */
class OapiCateringApplylistCorpidlistGetRequest
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
		return "dingtalk.oapi.catering.applylist.corpidlist.get";
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

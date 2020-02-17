<?php
/**
 * dingtalk API: dingtalk.oapi.retail.seller.sync request
 * 
 * @author auto create
 * @since 1.0, 2019.12.03
 */
class OapiRetailSellerSyncRequest
{
	/** 
	 * 卖家信息
	 **/
	private $sellerParam;
	
	/** 
	 * staffId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setSellerParam($sellerParam)
	{
		$this->sellerParam = $sellerParam;
		$this->apiParas["seller_param"] = $sellerParam;
	}

	public function getSellerParam()
	{
		return $this->sellerParam;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.retail.seller.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

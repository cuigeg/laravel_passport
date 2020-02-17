<?php
/**
 * dingtalk API: dingtalk.corp.blazers.removemapping request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpBlazersRemovemappingRequest
{
	/** 
	 * 商户唯一标识
	 **/
	private $bizId;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.blazers.removemapping";
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

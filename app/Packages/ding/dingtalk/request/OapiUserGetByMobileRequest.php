<?php
/**
 * dingtalk API: dingtalk.oapi.user.get_by_mobile request
 * 
 * @author auto create
 * @since 1.0, 2019.10.11
 */
class OapiUserGetByMobileRequest
{
	/** 
	 * 手机号
	 **/
	private $mobile;
	
	private $apiParas = array();
	
	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.get_by_mobile";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

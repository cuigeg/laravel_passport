<?php
/**
 * dingtalk API: dingtalk.oapi.sns.verify_mobile request
 * 
 * @author auto create
 * @since 1.0, 2019.12.30
 */
class OapiSnsVerifyMobileRequest
{
	/** 
	 * 1
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
		return "dingtalk.oapi.sns.verify_mobile";
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

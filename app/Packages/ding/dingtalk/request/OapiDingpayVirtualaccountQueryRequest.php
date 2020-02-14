<?php
/**
 * dingtalk API: dingtalk.oapi.dingpay.virtualaccount.query request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiDingpayVirtualaccountQueryRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extension;
	
	private $apiParas = array();
	
	public function setExtension($extension)
	{
		$this->extension = $extension;
		$this->apiParas["extension"] = $extension;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingpay.virtualaccount.query";
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

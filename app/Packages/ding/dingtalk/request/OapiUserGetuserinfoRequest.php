<?php
/**
 * dingtalk API: dingtalk.oapi.user.getuserinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserGetuserinfoRequest
{
	/** 
	 * requestAuthCode接口中获取的CODE
	 **/
	private $code;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.getuserinfo";
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

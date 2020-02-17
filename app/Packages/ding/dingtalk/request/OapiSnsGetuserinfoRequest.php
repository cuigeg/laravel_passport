<?php
/**
 * dingtalk API: dingtalk.oapi.sns.getuserinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSnsGetuserinfoRequest
{
	/** 
	 * 用户授权给开放应用的token
	 **/
	private $snsToken;
	
	private $apiParas = array();
	
	public function setSnsToken($snsToken)
	{
		$this->snsToken = $snsToken;
		$this->apiParas["sns_token"] = $snsToken;
	}

	public function getSnsToken()
	{
		return $this->snsToken;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.getuserinfo";
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

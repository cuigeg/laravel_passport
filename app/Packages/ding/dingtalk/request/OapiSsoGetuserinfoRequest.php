<?php
/**
 * dingtalk API: dingtalk.oapi.sso.getuserinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSsoGetuserinfoRequest
{
	/** 
	 * 通过Oauth认证给URL带上的CODE
	 **/
	private $accessToken;
	
	/** 
	 * 再次强调，此token不同于一般的accesstoken，需要调用获取微应用管理员免登需要的AccessToken
	 **/
	private $code;
	
	private $apiParas = array();
	
	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
		$this->apiParas["access_token"] = $accessToken;
	}

	public function getAccessToken()
	{
		return $this->accessToken;
	}

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
		return "dingtalk.oapi.sso.getuserinfo";
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

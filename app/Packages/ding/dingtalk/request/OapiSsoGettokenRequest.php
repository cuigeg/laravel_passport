<?php
/**
 * dingtalk API: dingtalk.oapi.sso.gettoken request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSsoGettokenRequest
{
	/** 
	 * 企业Id
	 **/
	private $corpid;
	
	/** 
	 * 这里必须填写专属的SSOSecret
	 **/
	private $corpsecret;
	
	private $apiParas = array();
	
	public function setCorpid($corpid)
	{
		$this->corpid = $corpid;
		$this->apiParas["corpid"] = $corpid;
	}

	public function getCorpid()
	{
		return $this->corpid;
	}

	public function setCorpsecret($corpsecret)
	{
		$this->corpsecret = $corpsecret;
		$this->apiParas["corpsecret"] = $corpsecret;
	}

	public function getCorpsecret()
	{
		return $this->corpsecret;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sso.gettoken";
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

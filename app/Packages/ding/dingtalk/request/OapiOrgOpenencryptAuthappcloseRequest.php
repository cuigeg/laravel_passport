<?php
/**
 * dingtalk API: dingtalk.oapi.org.openencrypt.authappclose request
 * 
 * @author auto create
 * @since 1.0, 2019.12.23
 */
class OapiOrgOpenencryptAuthappcloseRequest
{
	/** 
	 * 请求参数
	 **/
	private $topAuthMicroAppClose;
	
	private $apiParas = array();
	
	public function setTopAuthMicroAppClose($topAuthMicroAppClose)
	{
		$this->topAuthMicroAppClose = $topAuthMicroAppClose;
		$this->apiParas["top_auth_micro_app_close"] = $topAuthMicroAppClose;
	}

	public function getTopAuthMicroAppClose()
	{
		return $this->topAuthMicroAppClose;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.openencrypt.authappclose";
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

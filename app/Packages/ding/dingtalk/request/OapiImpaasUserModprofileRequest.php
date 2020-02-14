<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.user.modprofile request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiImpaasUserModprofileRequest
{
	/** 
	 * 修改profile入参
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.user.modprofile";
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

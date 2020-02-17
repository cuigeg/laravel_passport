<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.converstion.createo2o request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiImpaasConverstionCreateo2oRequest
{
	/** 
	 * 创建会话请求
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
		return "dingtalk.oapi.impaas.converstion.createo2o";
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

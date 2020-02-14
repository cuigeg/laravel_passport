<?php
/**
 * dingtalk API: dingtalk.oapi.blackboard.create request
 * 
 * @author auto create
 * @since 1.0, 2019.11.04
 */
class OapiBlackboardCreateRequest
{
	/** 
	 * 请求入参
	 **/
	private $createRequest;
	
	private $apiParas = array();
	
	public function setCreateRequest($createRequest)
	{
		$this->createRequest = $createRequest;
		$this->apiParas["create_request"] = $createRequest;
	}

	public function getCreateRequest()
	{
		return $this->createRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.blackboard.create";
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

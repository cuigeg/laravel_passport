<?php
/**
 * dingtalk API: dingtalk.oapi.blackboard.listids request
 * 
 * @author auto create
 * @since 1.0, 2019.11.04
 */
class OapiBlackboardListidsRequest
{
	/** 
	 * 请求入参
	 **/
	private $queryRequest;
	
	private $apiParas = array();
	
	public function setQueryRequest($queryRequest)
	{
		$this->queryRequest = $queryRequest;
		$this->apiParas["query_request"] = $queryRequest;
	}

	public function getQueryRequest()
	{
		return $this->queryRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.blackboard.listids";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.process.workrecord.taskgroup.cancel request
 * 
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class OapiProcessWorkrecordTaskgroupCancelRequest
{
	/** 
	 * request
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
		return "dingtalk.oapi.process.workrecord.taskgroup.cancel";
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

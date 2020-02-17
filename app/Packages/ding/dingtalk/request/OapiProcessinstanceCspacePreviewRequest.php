<?php
/**
 * dingtalk API: dingtalk.oapi.processinstance.cspace.preview request
 * 
 * @author auto create
 * @since 1.0, 2020.02.05
 */
class OapiProcessinstanceCspacePreviewRequest
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
		return "dingtalk.oapi.processinstance.cspace.preview";
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

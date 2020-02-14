<?php
/**
 * dingtalk API: dingtalk.oapi.process.save request
 * 
 * @author auto create
 * @since 1.0, 2020.01.17
 */
class OapiProcessSaveRequest
{
	/** 
	 * 入参
	 **/
	private $saveProcessRequest;
	
	private $apiParas = array();
	
	public function setSaveProcessRequest($saveProcessRequest)
	{
		$this->saveProcessRequest = $saveProcessRequest;
		$this->apiParas["saveProcessRequest"] = $saveProcessRequest;
	}

	public function getSaveProcessRequest()
	{
		return $this->saveProcessRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.save";
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

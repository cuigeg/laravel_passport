<?php
/**
 * dingtalk API: dingtalk.oapi.process.form.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.27
 */
class OapiProcessFormGetRequest
{
	/** 
	 * 流程模板code
	 **/
	private $processCode;
	
	private $apiParas = array();
	
	public function setProcessCode($processCode)
	{
		$this->processCode = $processCode;
		$this->apiParas["process_code"] = $processCode;
	}

	public function getProcessCode()
	{
		return $this->processCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.form.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processCode,"processCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

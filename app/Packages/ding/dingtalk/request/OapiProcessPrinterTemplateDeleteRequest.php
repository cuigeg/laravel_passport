<?php
/**
 * dingtalk API: dingtalk.oapi.process.printer.template.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.10.11
 */
class OapiProcessPrinterTemplateDeleteRequest
{
	/** 
	 * 请求对象
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
		return "dingtalk.oapi.process.printer.template.delete";
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

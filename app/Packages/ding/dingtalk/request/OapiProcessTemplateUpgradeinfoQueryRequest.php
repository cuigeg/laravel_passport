<?php
/**
 * dingtalk API: dingtalk.oapi.process.template.upgradeinfo.query request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessTemplateUpgradeinfoQueryRequest
{
	/** 
	 * 流程编码List<String>类型
	 **/
	private $processCodes;
	
	private $apiParas = array();
	
	public function setProcessCodes($processCodes)
	{
		$this->processCodes = $processCodes;
		$this->apiParas["process_codes"] = $processCodes;
	}

	public function getProcessCodes()
	{
		return $this->processCodes;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.template.upgradeinfo.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->processCodes,"processCodes");
		RequestCheckUtil::checkMaxListSize($this->processCodes,20,"processCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

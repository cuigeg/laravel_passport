<?php
/**
 * dingtalk API: dingtalk.oapi.openencrypt.updateconfig request
 * 
 * @author auto create
 * @since 1.0, 2019.10.09
 */
class OapiOpenencryptUpdateconfigRequest
{
	/** 
	 * 请求参数
	 **/
	private $topResourceKmsConfig;
	
	private $apiParas = array();
	
	public function setTopResourceKmsConfig($topResourceKmsConfig)
	{
		$this->topResourceKmsConfig = $topResourceKmsConfig;
		$this->apiParas["top_resource_kms_config"] = $topResourceKmsConfig;
	}

	public function getTopResourceKmsConfig()
	{
		return $this->topResourceKmsConfig;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.openencrypt.updateconfig";
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

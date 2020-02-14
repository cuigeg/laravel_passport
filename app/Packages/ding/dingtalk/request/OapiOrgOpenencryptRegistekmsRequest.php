<?php
/**
 * dingtalk API: dingtalk.oapi.org.openencrypt.registekms request
 * 
 * @author auto create
 * @since 1.0, 2019.10.09
 */
class OapiOrgOpenencryptRegistekmsRequest
{
	/** 
	 * 请求参数
	 **/
	private $topKmsMeta;
	
	private $apiParas = array();
	
	public function setTopKmsMeta($topKmsMeta)
	{
		$this->topKmsMeta = $topKmsMeta;
		$this->apiParas["top_kms_meta"] = $topKmsMeta;
	}

	public function getTopKmsMeta()
	{
		return $this->topKmsMeta;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.openencrypt.registekms";
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

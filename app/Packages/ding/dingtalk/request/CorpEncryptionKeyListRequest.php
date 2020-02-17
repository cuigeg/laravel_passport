<?php
/**
 * dingtalk API: dingtalk.corp.encryption.key.list request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpEncryptionKeyListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.corp.encryption.key.list";
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

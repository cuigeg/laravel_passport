<?php
/**
 * TOP API: n95wrxpkif.cilai.dingtalk.test request
 * 
 * @author auto create
 * @since 1.0, 2018.04.20
 */
class CilaiDingtalkTestRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "n95wrxpkif.cilai.dingtalk.test";
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

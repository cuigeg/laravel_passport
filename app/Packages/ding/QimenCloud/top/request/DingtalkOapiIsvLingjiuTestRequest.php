<?php
/**
 * TOP API: 21d8pajl08.dingtalk.oapi.isv.lingjiu.test request
 * 
 * @author auto create
 * @since 1.0, 2019.09.04
 */
class DingtalkOapiIsvLingjiuTestRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "21d8pajl08.dingtalk.oapi.isv.lingjiu.test";
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

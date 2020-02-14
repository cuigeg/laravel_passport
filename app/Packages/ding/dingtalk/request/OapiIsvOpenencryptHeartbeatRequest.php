<?php
/**
 * dingtalk API: dingtalk.oapi.isv.openencrypt.heartbeat request
 * 
 * @author auto create
 * @since 1.0, 2019.10.09
 */
class OapiIsvOpenencryptHeartbeatRequest
{
	/** 
	 * 请求参数
	 **/
	private $topKmsHeartbeat;
	
	private $apiParas = array();
	
	public function setTopKmsHeartbeat($topKmsHeartbeat)
	{
		$this->topKmsHeartbeat = $topKmsHeartbeat;
		$this->apiParas["top_kms_heartbeat"] = $topKmsHeartbeat;
	}

	public function getTopKmsHeartbeat()
	{
		return $this->topKmsHeartbeat;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.isv.openencrypt.heartbeat";
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

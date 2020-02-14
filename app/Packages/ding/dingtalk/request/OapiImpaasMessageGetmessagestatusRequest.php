<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.message.getmessagestatus request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiImpaasMessageGetmessagestatusRequest
{
	/** 
	 * 根据异步发送时返回的taskid获取消息
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
		return "dingtalk.oapi.impaas.message.getmessagestatus";
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

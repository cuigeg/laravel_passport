<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.session.close request
 * 
 * @author auto create
 * @since 1.0, 2020.02.12
 */
class OapiCustomerserviceSessionCloseRequest
{
	/** 
	 * 关闭会话
	 **/
	private $closeSession;
	
	private $apiParas = array();
	
	public function setCloseSession($closeSession)
	{
		$this->closeSession = $closeSession;
		$this->apiParas["close_session"] = $closeSession;
	}

	public function getCloseSession()
	{
		return $this->closeSession;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.session.close";
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

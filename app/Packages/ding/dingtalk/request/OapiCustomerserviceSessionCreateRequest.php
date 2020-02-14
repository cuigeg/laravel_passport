<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.session.create request
 * 
 * @author auto create
 * @since 1.0, 2020.02.12
 */
class OapiCustomerserviceSessionCreateRequest
{
	/** 
	 * 新建会话参数
	 **/
	private $createSession;
	
	private $apiParas = array();
	
	public function setCreateSession($createSession)
	{
		$this->createSession = $createSession;
		$this->apiParas["create_session"] = $createSession;
	}

	public function getCreateSession()
	{
		return $this->createSession;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.session.create";
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

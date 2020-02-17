<?php
/**
 * dingtalk API: dingtalk.oapi.chat.get request
 * 
 * @author auto create
 * @since 1.0, 2019.03.11
 */
class OapiChatGetRequest
{
	/** 
	 * 群会话的id
	 **/
	private $chatid;
	
	private $apiParas = array();
	
	public function setChatid($chatid)
	{
		$this->chatid = $chatid;
		$this->apiParas["chatid"] = $chatid;
	}

	public function getChatid()
	{
		return $this->chatid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.get";
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

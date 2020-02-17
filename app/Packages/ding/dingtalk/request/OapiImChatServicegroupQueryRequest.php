<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.servicegroup.query request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiImChatServicegroupQueryRequest
{
	/** 
	 * 开放的chatId
	 **/
	private $chatId;
	
	private $apiParas = array();
	
	public function setChatId($chatId)
	{
		$this->chatId = $chatId;
		$this->apiParas["chat_id"] = $chatId;
	}

	public function getChatId()
	{
		return $this->chatId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.servicegroup.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatId,"chatId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

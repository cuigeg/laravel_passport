<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.listbychatbotids request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpChatbotListbychatbotidsRequest
{
	/** 
	 * chatbotId列表
	 **/
	private $chatbotIds;
	
	private $apiParas = array();
	
	public function setChatbotIds($chatbotIds)
	{
		$this->chatbotIds = $chatbotIds;
		$this->apiParas["chatbot_ids"] = $chatbotIds;
	}

	public function getChatbotIds()
	{
		return $this->chatbotIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.listbychatbotids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatbotIds,"chatbotIds");
		RequestCheckUtil::checkMaxListSize($this->chatbotIds,20,"chatbotIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.createorgbot request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpChatbotCreateorgbotRequest
{
	/** 
	 * 创建机器人modle
	 **/
	private $createChatBotModel;
	
	private $apiParas = array();
	
	public function setCreateChatBotModel($createChatBotModel)
	{
		$this->createChatBotModel = $createChatBotModel;
		$this->apiParas["create_chat_bot_model"] = $createChatBotModel;
	}

	public function getCreateChatBotModel()
	{
		return $this->createChatBotModel;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.createorgbot";
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

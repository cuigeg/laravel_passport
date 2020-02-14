<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.install request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpChatbotInstallRequest
{
	/** 
	 * 安装的机器人信息
	 **/
	private $chatbotVo;
	
	private $apiParas = array();
	
	public function setChatbotVo($chatbotVo)
	{
		$this->chatbotVo = $chatbotVo;
		$this->apiParas["chatbot_vo"] = $chatbotVo;
	}

	public function getChatbotVo()
	{
		return $this->chatbotVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.install";
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

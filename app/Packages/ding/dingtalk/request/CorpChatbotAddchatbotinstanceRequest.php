<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.addchatbotinstance request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpChatbotAddchatbotinstanceRequest
{
	/** 
	 * 机器人id，由钉钉事先分配
	 **/
	private $chatbotId;
	
	/** 
	 * 机器人头像(如果为空，默认是机器人安装时的头像)
	 **/
	private $iconMediaId;
	
	/** 
	 * 机器人名字(如果为空，默认是机器人安装时的名字)
	 **/
	private $name;
	
	/** 
	 * 创建群时返回的openConvsationId
	 **/
	private $openConversationId;
	
	private $apiParas = array();
	
	public function setChatbotId($chatbotId)
	{
		$this->chatbotId = $chatbotId;
		$this->apiParas["chatbot_id"] = $chatbotId;
	}

	public function getChatbotId()
	{
		return $this->chatbotId;
	}

	public function setIconMediaId($iconMediaId)
	{
		$this->iconMediaId = $iconMediaId;
		$this->apiParas["icon_media_id"] = $iconMediaId;
	}

	public function getIconMediaId()
	{
		return $this->iconMediaId;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOpenConversationId($openConversationId)
	{
		$this->openConversationId = $openConversationId;
		$this->apiParas["open_conversation_id"] = $openConversationId;
	}

	public function getOpenConversationId()
	{
		return $this->openConversationId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.addchatbotinstance";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatbotId,"chatbotId");
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

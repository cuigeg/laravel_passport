<?php
/**
 * dingtalk API: dingtalk.corp.chatbot.updateorgbot request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpChatbotUpdateorgbotRequest
{
	/** 
	 * 创建时返回的机器人Id
	 **/
	private $chatbotId;
	
	/** 
	 * 头像的mediaId
	 **/
	private $icon;
	
	/** 
	 * 机器人名字
	 **/
	private $name;
	
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

	public function setIcon($icon)
	{
		$this->icon = $icon;
		$this->apiParas["icon"] = $icon;
	}

	public function getIcon()
	{
		return $this->icon;
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

	public function getApiMethodName()
	{
		return "dingtalk.corp.chatbot.updateorgbot";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatbotId,"chatbotId");
		RequestCheckUtil::checkNotNull($this->icon,"icon");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

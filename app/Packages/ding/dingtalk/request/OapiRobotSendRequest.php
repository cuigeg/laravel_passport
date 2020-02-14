<?php
/**
 * dingtalk API: dingtalk.oapi.robot.send request
 * 
 * @author auto create
 * @since 1.0, 2018.11.29
 */
class OapiRobotSendRequest
{
	/** 
	 * 此消息类型为固定actionCard
	 **/
	private $actionCard;
	
	/** 
	 * 被@人的手机号
	 **/
	private $at;
	
	/** 
	 * 此消息类型为固定feedCard
	 **/
	private $feedCard;
	
	/** 
	 * 消息类型，此时固定为:link
	 **/
	private $link;
	
	/** 
	 * 此消息类型为固定markdown
	 **/
	private $markdown;
	
	/** 
	 * 消息类型
	 **/
	private $msgtype;
	
	/** 
	 * text类型
	 **/
	private $text;
	
	private $apiParas = array();
	
	public function setActionCard($actionCard)
	{
		$this->actionCard = $actionCard;
		$this->apiParas["actionCard"] = $actionCard;
	}

	public function getActionCard()
	{
		return $this->actionCard;
	}

	public function setAt($at)
	{
		$this->at = $at;
		$this->apiParas["at"] = $at;
	}

	public function getAt()
	{
		return $this->at;
	}

	public function setFeedCard($feedCard)
	{
		$this->feedCard = $feedCard;
		$this->apiParas["feedCard"] = $feedCard;
	}

	public function getFeedCard()
	{
		return $this->feedCard;
	}

	public function setLink($link)
	{
		$this->link = $link;
		$this->apiParas["link"] = $link;
	}

	public function getLink()
	{
		return $this->link;
	}

	public function setMarkdown($markdown)
	{
		$this->markdown = $markdown;
		$this->apiParas["markdown"] = $markdown;
	}

	public function getMarkdown()
	{
		return $this->markdown;
	}

	public function setMsgtype($msgtype)
	{
		$this->msgtype = $msgtype;
		$this->apiParas["msgtype"] = $msgtype;
	}

	public function getMsgtype()
	{
		return $this->msgtype;
	}

	public function setText($text)
	{
		$this->text = $text;
		$this->apiParas["text"] = $text;
	}

	public function getText()
	{
		return $this->text;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.robot.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->msgtype,"msgtype");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

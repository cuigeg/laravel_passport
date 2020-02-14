<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.newretail.sendstaffgroupmessage request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasNewretailSendstaffgroupmessageRequest
{
	/** 
	 * 加密后的群号
	 **/
	private $chatId;
	
	/** 
	 * 消息内容
	 **/
	private $content;
	
	/** 
	 * 消息类型
	 **/
	private $msgType;
	
	/** 
	 * 系统账号名
	 **/
	private $sender;
	
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

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setMsgType($msgType)
	{
		$this->msgType = $msgType;
		$this->apiParas["msg_type"] = $msgType;
	}

	public function getMsgType()
	{
		return $this->msgType;
	}

	public function setSender($sender)
	{
		$this->sender = $sender;
		$this->apiParas["sender"] = $sender;
	}

	public function getSender()
	{
		return $this->sender;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.newretail.sendstaffgroupmessage";
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

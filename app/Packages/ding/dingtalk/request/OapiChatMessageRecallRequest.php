<?php
/**
 * dingtalk API: dingtalk.oapi.chat.message.recall request
 * 
 * @author auto create
 * @since 1.0, 2020.01.08
 */
class OapiChatMessageRecallRequest
{
	/** 
	 * 会话id
	 **/
	private $chatid;
	
	/** 
	 * 消息id
	 **/
	private $msgid;
	
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

	public function setMsgid($msgid)
	{
		$this->msgid = $msgid;
		$this->apiParas["msgid"] = $msgid;
	}

	public function getMsgid()
	{
		return $this->msgid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.message.recall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatid,"chatid");
		RequestCheckUtil::checkNotNull($this->msgid,"msgid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.chat.transform request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiChatTransformRequest
{
	/** 
	 * 开放cid
	 **/
	private $openConversationId;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.chat.transform";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

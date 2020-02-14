<?php
/**
 * dingtalk API: dingtalk.oapi.chat.banwords.query request
 * 
 * @author auto create
 * @since 1.0, 2019.09.24
 */
class OapiChatBanwordsQueryRequest
{
	/** 
	 * 会话ID
	 **/
	private $chatid;
	
	/** 
	 * 被查询的用户ID
	 **/
	private $userid;
	
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

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.banwords.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatid,"chatid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

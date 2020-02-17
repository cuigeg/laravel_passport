<?php
/**
 * dingtalk API: dingtalk.oapi.chat.get.cid request
 * 
 * @author auto create
 * @since 1.0, 2019.08.15
 */
class OapiChatGetCidRequest
{
	/** 
	 * 会话Id
	 **/
	private $chatid;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.get.cid";
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

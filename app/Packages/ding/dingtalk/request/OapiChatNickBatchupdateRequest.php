<?php
/**
 * dingtalk API: dingtalk.oapi.chat.nick.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2019.08.01
 */
class OapiChatNickBatchupdateRequest
{
	/** 
	 * 会话id
	 **/
	private $chatid;
	
	/** 
	 * userId和nick的模型
	 **/
	private $userNickModel;
	
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

	public function setUserNickModel($userNickModel)
	{
		$this->userNickModel = $userNickModel;
		$this->apiParas["user_nick_model"] = $userNickModel;
	}

	public function getUserNickModel()
	{
		return $this->userNickModel;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.nick.batchupdate";
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

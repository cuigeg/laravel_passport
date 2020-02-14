<?php
/**
 * dingtalk API: dingtalk.oapi.message.send_to_single_conversation request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiMessageSendToSingleConversationRequest
{
	/** 
	 * 推送消息内容
	 **/
	private $msg;
	
	/** 
	 * 接收者userId
	 **/
	private $receiverUserid;
	
	/** 
	 * 发送者userId
	 **/
	private $senderUserid;
	
	private $apiParas = array();
	
	public function setMsg($msg)
	{
		$this->msg = $msg;
		$this->apiParas["msg"] = $msg;
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function setReceiverUserid($receiverUserid)
	{
		$this->receiverUserid = $receiverUserid;
		$this->apiParas["receiver_userid"] = $receiverUserid;
	}

	public function getReceiverUserid()
	{
		return $this->receiverUserid;
	}

	public function setSenderUserid($senderUserid)
	{
		$this->senderUserid = $senderUserid;
		$this->apiParas["sender_userid"] = $senderUserid;
	}

	public function getSenderUserid()
	{
		return $this->senderUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.message.send_to_single_conversation";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receiverUserid,"receiverUserid");
		RequestCheckUtil::checkNotNull($this->senderUserid,"senderUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

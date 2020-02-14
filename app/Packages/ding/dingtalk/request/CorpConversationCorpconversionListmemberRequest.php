<?php
/**
 * dingtalk API: dingtalk.corp.conversation.corpconversion.listmember request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpConversationCorpconversionListmemberRequest
{
	/** 
	 * 本次请求获取群成员的大小，最大为100
	 **/
	private $count;
	
	/** 
	 * 群成员列表偏移量
	 **/
	private $offset;
	
	/** 
	 * 群组id
	 **/
	private $openConversationId;
	
	private $apiParas = array();
	
	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
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
		return "dingtalk.corp.conversation.corpconversion.listmember";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->openConversationId,"openConversationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.chat.getReadList request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiChatGetReadListRequest
{
	/** 
	 * 分页查询的游标，第一次可以传0，后续传返回结果中的next_cursor的值。当返回结果中，没有next_cursor时，表示没有后续的数据了，可以结束调用
	 **/
	private $cursor;
	
	/** 
	 * 发送群消息接口返回的加密消息id
	 **/
	private $messageId;
	
	/** 
	 * 分页查询的大小，最大可以传100
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		$this->apiParas["messageId"] = $messageId;
	}

	public function getMessageId()
	{
		return $this->messageId;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.getReadList";
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

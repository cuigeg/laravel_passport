<?php
/**
 * dingtalk API: dingtalk.oapi.chat.tag.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.10.31
 */
class OapiChatTagDeleteRequest
{
	/** 
	 * 内部群的id
	 **/
	private $chatid;
	
	/** 
	 * 群标签的类型。1表示经销群；2表示销管群
	 **/
	private $groupTag;
	
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

	public function setGroupTag($groupTag)
	{
		$this->groupTag = $groupTag;
		$this->apiParas["group_tag"] = $groupTag;
	}

	public function getGroupTag()
	{
		return $this->groupTag;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.chat.tag.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatid,"chatid");
		RequestCheckUtil::checkNotNull($this->groupTag,"groupTag");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

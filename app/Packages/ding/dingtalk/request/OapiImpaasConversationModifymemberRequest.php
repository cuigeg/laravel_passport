<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.conversation.modifymember request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasConversationModifymemberRequest
{
	/** 
	 * 渠道
	 **/
	private $channel;
	
	/** 
	 * 群ID
	 **/
	private $chatid;
	
	/** 
	 * 会员ID列表
	 **/
	private $memberidList;
	
	/** 
	 * 1 添加 2 删除
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setChatid($chatid)
	{
		$this->chatid = $chatid;
		$this->apiParas["chatid"] = $chatid;
	}

	public function getChatid()
	{
		return $this->chatid;
	}

	public function setMemberidList($memberidList)
	{
		$this->memberidList = $memberidList;
		$this->apiParas["memberid_list"] = $memberidList;
	}

	public function getMemberidList()
	{
		return $this->memberidList;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.conversation.modifymember";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channel,"channel");
		RequestCheckUtil::checkNotNull($this->chatid,"chatid");
		RequestCheckUtil::checkNotNull($this->memberidList,"memberidList");
		RequestCheckUtil::checkMaxListSize($this->memberidList,500,"memberidList");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

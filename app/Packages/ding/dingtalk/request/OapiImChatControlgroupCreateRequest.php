<?php
/**
 * dingtalk API: dingtalk.oapi.im.chat.controlgroup.create request
 * 
 * @author auto create
 * @since 1.0, 2020.01.09
 */
class OapiImChatControlgroupCreateRequest
{
	/** 
	 * 建群去重的业务id
	 **/
	private $groupUniqId;
	
	/** 
	 * 群成员在钉钉组织内的userid列表
	 **/
	private $memberUserids;
	
	/** 
	 * 群主在钉钉组织内的userid
	 **/
	private $ownerUserid;
	
	/** 
	 * 群标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setGroupUniqId($groupUniqId)
	{
		$this->groupUniqId = $groupUniqId;
		$this->apiParas["group_uniq_id"] = $groupUniqId;
	}

	public function getGroupUniqId()
	{
		return $this->groupUniqId;
	}

	public function setMemberUserids($memberUserids)
	{
		$this->memberUserids = $memberUserids;
		$this->apiParas["member_userids"] = $memberUserids;
	}

	public function getMemberUserids()
	{
		return $this->memberUserids;
	}

	public function setOwnerUserid($ownerUserid)
	{
		$this->ownerUserid = $ownerUserid;
		$this->apiParas["owner_userid"] = $ownerUserid;
	}

	public function getOwnerUserid()
	{
		return $this->ownerUserid;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.im.chat.controlgroup.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberUserids,"memberUserids");
		RequestCheckUtil::checkMaxListSize($this->memberUserids,20,"memberUserids");
		RequestCheckUtil::checkNotNull($this->ownerUserid,"ownerUserid");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,256,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

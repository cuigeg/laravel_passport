<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.member.listbyids request
 * 
 * @author auto create
 * @since 1.0, 2019.08.16
 */
class OapiAttendanceGroupMemberListbyidsRequest
{
	/** 
	 * 考勤组id
	 **/
	private $groupId;
	
	/** 
	 * 成员id，可以是userId或者deptId
	 **/
	private $memberIds;
	
	/** 
	 * 0 表示员工，1表示部门
	 **/
	private $memberType;
	
	/** 
	 * 操作人userId
	 **/
	private $opUserId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function setMemberIds($memberIds)
	{
		$this->memberIds = $memberIds;
		$this->apiParas["member_ids"] = $memberIds;
	}

	public function getMemberIds()
	{
		return $this->memberIds;
	}

	public function setMemberType($memberType)
	{
		$this->memberType = $memberType;
		$this->apiParas["member_type"] = $memberType;
	}

	public function getMemberType()
	{
		return $this->memberType;
	}

	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.member.listbyids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->memberIds,"memberIds");
		RequestCheckUtil::checkMaxListSize($this->memberIds,20,"memberIds");
		RequestCheckUtil::checkNotNull($this->memberType,"memberType");
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

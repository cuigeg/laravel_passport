<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.corp.inviteactive.add request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceCorpInviteactiveAddRequest
{
	/** 
	 * 管理员的手机号
	 **/
	private $adminMobile;
	
	/** 
	 * 被邀请员工的手机号
	 **/
	private $invitedMobile;
	
	private $apiParas = array();
	
	public function setAdminMobile($adminMobile)
	{
		$this->adminMobile = $adminMobile;
		$this->apiParas["admin_mobile"] = $adminMobile;
	}

	public function getAdminMobile()
	{
		return $this->adminMobile;
	}

	public function setInvitedMobile($invitedMobile)
	{
		$this->invitedMobile = $invitedMobile;
		$this->apiParas["invited_mobile"] = $invitedMobile;
	}

	public function getInvitedMobile()
	{
		return $this->invitedMobile;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.corp.inviteactive.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adminMobile,"adminMobile");
		RequestCheckUtil::checkNotNull($this->invitedMobile,"invitedMobile");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

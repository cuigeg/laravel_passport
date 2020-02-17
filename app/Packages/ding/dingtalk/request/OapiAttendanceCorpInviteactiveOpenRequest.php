<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.corp.inviteactive.open request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceCorpInviteactiveOpenRequest
{
	/** 
	 * 姓名
	 **/
	private $adminName;
	
	/** 
	 * 手机号
	 **/
	private $adminPhone;
	
	private $apiParas = array();
	
	public function setAdminName($adminName)
	{
		$this->adminName = $adminName;
		$this->apiParas["admin_name"] = $adminName;
	}

	public function getAdminName()
	{
		return $this->adminName;
	}

	public function setAdminPhone($adminPhone)
	{
		$this->adminPhone = $adminPhone;
		$this->apiParas["admin_phone"] = $adminPhone;
	}

	public function getAdminPhone()
	{
		return $this->adminPhone;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.corp.inviteactive.open";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adminName,"adminName");
		RequestCheckUtil::checkNotNull($this->adminPhone,"adminPhone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

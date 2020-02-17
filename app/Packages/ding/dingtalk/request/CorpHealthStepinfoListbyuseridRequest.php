<?php
/**
 * dingtalk API: dingtalk.corp.health.stepinfo.listbyuserid request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpHealthStepinfoListbyuseridRequest
{
	/** 
	 * 时间，注意时间格式是YYMMDD
	 **/
	private $statDate;
	
	/** 
	 * 员工userid列表，最多传50个
	 **/
	private $userids;
	
	private $apiParas = array();
	
	public function setStatDate($statDate)
	{
		$this->statDate = $statDate;
		$this->apiParas["stat_date"] = $statDate;
	}

	public function getStatDate()
	{
		return $this->statDate;
	}

	public function setUserids($userids)
	{
		$this->userids = $userids;
		$this->apiParas["userids"] = $userids;
	}

	public function getUserids()
	{
		return $this->userids;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.health.stepinfo.listbyuserid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->statDate,"statDate");
		RequestCheckUtil::checkNotNull($this->userids,"userids");
		RequestCheckUtil::checkMaxListSize($this->userids,50,"userids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

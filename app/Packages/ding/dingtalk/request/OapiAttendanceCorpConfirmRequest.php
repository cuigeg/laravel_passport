<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.corp.confirm request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceCorpConfirmRequest
{
	/** 
	 * 企业id
	 **/
	private $corpId;
	
	/** 
	 * 企业明细
	 **/
	private $corpList;
	
	private $apiParas = array();
	
	public function setCorpId($corpId)
	{
		$this->corpId = $corpId;
		$this->apiParas["corp_id"] = $corpId;
	}

	public function getCorpId()
	{
		return $this->corpId;
	}

	public function setCorpList($corpList)
	{
		$this->corpList = $corpList;
		$this->apiParas["corp_list"] = $corpList;
	}

	public function getCorpList()
	{
		return $this->corpList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.corp.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->corpId,"corpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

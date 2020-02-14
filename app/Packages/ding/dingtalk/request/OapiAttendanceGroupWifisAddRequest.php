<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.wifis.add request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceGroupWifisAddRequest
{
	/** 
	 * 考勤组id
	 **/
	private $groupKey;
	
	/** 
	 * 操作人userId
	 **/
	private $opUserid;
	
	/** 
	 * wifi列表
	 **/
	private $wifiList;
	
	private $apiParas = array();
	
	public function setGroupKey($groupKey)
	{
		$this->groupKey = $groupKey;
		$this->apiParas["group_key"] = $groupKey;
	}

	public function getGroupKey()
	{
		return $this->groupKey;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function setWifiList($wifiList)
	{
		$this->wifiList = $wifiList;
		$this->apiParas["wifi_list"] = $wifiList;
	}

	public function getWifiList()
	{
		return $this->wifiList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.wifis.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupKey,"groupKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

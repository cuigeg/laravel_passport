<?php
/**
 * dingtalk API: dingtalk.oapi.edu.main.data.get request
 * 
 * @author auto create
 * @since 1.0, 2019.12.30
 */
class OapiEduMainDataGetRequest
{
	/** 
	 * 统计日期
	 **/
	private $statDate;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.main.data.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->statDate,"statDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.report.statistics request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiReportStatisticsRequest
{
	/** 
	 * 日志id
	 **/
	private $reportId;
	
	private $apiParas = array();
	
	public function setReportId($reportId)
	{
		$this->reportId = $reportId;
		$this->apiParas["report_id"] = $reportId;
	}

	public function getReportId()
	{
		return $this->reportId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.report.statistics";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reportId,"reportId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

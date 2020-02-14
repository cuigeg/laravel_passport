<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.getattcolumns request
 * 
 * @author auto create
 * @since 1.0, 2019.10.09
 */
class OapiAttendanceGetattcolumnsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.getattcolumns";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

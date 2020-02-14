<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectmeta.followrecord.describe request
 * 
 * @author auto create
 * @since 1.0, 2020.01.07
 */
class OapiCrmObjectmetaFollowrecordDescribeRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectmeta.followrecord.describe";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.statistics.details request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiStatisticsDetailsRequest
{
	/** 
	 * 业务类型，目前有employee,group, live
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.statistics.details";
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

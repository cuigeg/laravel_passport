<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.group.getbydeptid request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasGroupGetbydeptidRequest
{
	/** 
	 * 1企业全员群
	 **/
	private $deptId;
	
	private $apiParas = array();
	
	public function setDeptId($deptId)
	{
		$this->deptId = $deptId;
		$this->apiParas["dept_id"] = $deptId;
	}

	public function getDeptId()
	{
		return $this->deptId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.group.getbydeptid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deptId,"deptId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

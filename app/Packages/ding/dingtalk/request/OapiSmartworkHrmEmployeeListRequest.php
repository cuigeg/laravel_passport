<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.list request
 * 
 * @author auto create
 * @since 1.0, 2020.01.16
 */
class OapiSmartworkHrmEmployeeListRequest
{
	/** 
	 * 微应用在企业的agentId
	 **/
	private $agentid;
	
	/** 
	 * 需要获取的花名册字段信息
	 **/
	private $fieldFilterList;
	
	/** 
	 * 员工id列表
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setAgentid($agentid)
	{
		$this->agentid = $agentid;
		$this->apiParas["agentid"] = $agentid;
	}

	public function getAgentid()
	{
		return $this->agentid;
	}

	public function setFieldFilterList($fieldFilterList)
	{
		$this->fieldFilterList = $fieldFilterList;
		$this->apiParas["field_filter_list"] = $fieldFilterList;
	}

	public function getFieldFilterList()
	{
		return $this->fieldFilterList;
	}

	public function setUseridList($useridList)
	{
		$this->useridList = $useridList;
		$this->apiParas["userid_list"] = $useridList;
	}

	public function getUseridList()
	{
		return $this->useridList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fieldFilterList,50,"fieldFilterList");
		RequestCheckUtil::checkNotNull($this->useridList,"useridList");
		RequestCheckUtil::checkMaxListSize($this->useridList,50,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.listbycert request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartworkHrmEmployeeListbycertRequest
{
	/** 
	 * 查询参数
	 **/
	private $params;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.listbycert";
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

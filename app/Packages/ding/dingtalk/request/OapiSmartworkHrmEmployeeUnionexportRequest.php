<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.unionexport request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartworkHrmEmployeeUnionexportRequest
{
	/** 
	 * 导出请求对象
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.unionexport";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.atmachine.user.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceAtmachineUserUpdateRequest
{
	/** 
	 * 变更智能考勤机员工参数模型
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
		return "dingtalk.oapi.smartdevice.atmachine.user.update";
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

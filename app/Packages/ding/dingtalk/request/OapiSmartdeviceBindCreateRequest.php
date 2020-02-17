<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.bind.create request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceBindCreateRequest
{
	/** 
	 * 设备请求信息
	 **/
	private $deviceBindReqVo;
	
	private $apiParas = array();
	
	public function setDeviceBindReqVo($deviceBindReqVo)
	{
		$this->deviceBindReqVo = $deviceBindReqVo;
		$this->apiParas["device_bind_req_vo"] = $deviceBindReqVo;
	}

	public function getDeviceBindReqVo()
	{
		return $this->deviceBindReqVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.bind.create";
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

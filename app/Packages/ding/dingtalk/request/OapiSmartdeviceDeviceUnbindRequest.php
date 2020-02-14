<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.device.unbind request
 * 
 * @author auto create
 * @since 1.0, 2020.02.07
 */
class OapiSmartdeviceDeviceUnbindRequest
{
	/** 
	 * 解绑参数
	 **/
	private $deviceUnbindVo;
	
	private $apiParas = array();
	
	public function setDeviceUnbindVo($deviceUnbindVo)
	{
		$this->deviceUnbindVo = $deviceUnbindVo;
		$this->apiParas["device_unbind_vo"] = $deviceUnbindVo;
	}

	public function getDeviceUnbindVo()
	{
		return $this->deviceUnbindVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.device.unbind";
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

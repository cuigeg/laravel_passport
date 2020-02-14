<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.device.query request
 * 
 * @author auto create
 * @since 1.0, 2020.02.07
 */
class OapiSmartdeviceDeviceQueryRequest
{
	/** 
	 * 设备查询对象
	 **/
	private $deviceQueryVo;
	
	private $apiParas = array();
	
	public function setDeviceQueryVo($deviceQueryVo)
	{
		$this->deviceQueryVo = $deviceQueryVo;
		$this->apiParas["device_query_vo"] = $deviceQueryVo;
	}

	public function getDeviceQueryVo()
	{
		return $this->deviceQueryVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.device.query";
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

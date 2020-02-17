<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.event.post request
 * 
 * @author auto create
 * @since 1.0, 2019.12.25
 */
class OapiSmartdeviceEventPostRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $deviceEventVo;
	
	private $apiParas = array();
	
	public function setDeviceEventVo($deviceEventVo)
	{
		$this->deviceEventVo = $deviceEventVo;
		$this->apiParas["device_event_vo"] = $deviceEventVo;
	}

	public function getDeviceEventVo()
	{
		return $this->deviceEventVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.event.post";
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

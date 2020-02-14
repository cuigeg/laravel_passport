<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.devicemember.removeall request
 * 
 * @author auto create
 * @since 1.0, 2019.08.08
 */
class OapiSmartdeviceDevicememberRemoveallRequest
{
	/** 
	 * 设备id
	 **/
	private $deviceId;
	
	private $apiParas = array();
	
	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.devicemember.removeall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.corp.device.nick.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpDeviceNickUpdateRequest
{
	/** 
	 * 设备ID
	 **/
	private $deviceId;
	
	/** 
	 * 设备服务商ID
	 **/
	private $deviceServiceId;
	
	/** 
	 * 设备新昵称
	 **/
	private $newNick;
	
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

	public function setDeviceServiceId($deviceServiceId)
	{
		$this->deviceServiceId = $deviceServiceId;
		$this->apiParas["device_service_id"] = $deviceServiceId;
	}

	public function getDeviceServiceId()
	{
		return $this->deviceServiceId;
	}

	public function setNewNick($newNick)
	{
		$this->newNick = $newNick;
		$this->apiParas["new_nick"] = $newNick;
	}

	public function getNewNick()
	{
		return $this->newNick;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.device.nick.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceId,"deviceId");
		RequestCheckUtil::checkNotNull($this->deviceServiceId,"deviceServiceId");
		RequestCheckUtil::checkNotNull($this->newNick,"newNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

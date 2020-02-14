<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.facegroup.enable request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceFacegroupEnableRequest
{
	/** 
	 * 业务id
	 **/
	private $bizId;
	
	/** 
	 * 设备id列表
	 **/
	private $deviceIds;
	
	/** 
	 * true-启用识别；false-禁用识别
	 **/
	private $enable;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setDeviceIds($deviceIds)
	{
		$this->deviceIds = $deviceIds;
		$this->apiParas["device_ids"] = $deviceIds;
	}

	public function getDeviceIds()
	{
		return $this->deviceIds;
	}

	public function setEnable($enable)
	{
		$this->enable = $enable;
		$this->apiParas["enable"] = $enable;
	}

	public function getEnable()
	{
		return $this->enable;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.facegroup.enable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkMaxLength($this->bizId,23,"bizId");
		RequestCheckUtil::checkMaxListSize($this->deviceIds,20,"deviceIds");
		RequestCheckUtil::checkNotNull($this->enable,"enable");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

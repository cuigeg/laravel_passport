<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.device.updatenick request
 * 
 * @author auto create
 * @since 1.0, 2020.02.07
 */
class OapiSmartdeviceDeviceUpdatenickRequest
{
	/** 
	 * 昵称修改参数
	 **/
	private $deviceNickModifyVo;
	
	private $apiParas = array();
	
	public function setDeviceNickModifyVo($deviceNickModifyVo)
	{
		$this->deviceNickModifyVo = $deviceNickModifyVo;
		$this->apiParas["device_nick_modify_vo"] = $deviceNickModifyVo;
	}

	public function getDeviceNickModifyVo()
	{
		return $this->deviceNickModifyVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.device.updatenick";
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

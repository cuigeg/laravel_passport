<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.visitor.sendnotify request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceVisitorSendnotifyRequest
{
	/** 
	 * 预约ID
	 **/
	private $reservationId;
	
	/** 
	 * 访客通知模型
	 **/
	private $visitorNotifyVo;
	
	private $apiParas = array();
	
	public function setReservationId($reservationId)
	{
		$this->reservationId = $reservationId;
		$this->apiParas["reservation_id"] = $reservationId;
	}

	public function getReservationId()
	{
		return $this->reservationId;
	}

	public function setVisitorNotifyVo($visitorNotifyVo)
	{
		$this->visitorNotifyVo = $visitorNotifyVo;
		$this->apiParas["visitor_notify_vo"] = $visitorNotifyVo;
	}

	public function getVisitorNotifyVo()
	{
		return $this->visitorNotifyVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.visitor.sendnotify";
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

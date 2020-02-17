<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.event.change request
 * 
 * @author auto create
 * @since 1.0, 2020.02.12
 */
class OapiCustomerserviceEventChangeRequest
{
	/** 
	 * 事件对象
	 **/
	private $eventDto;
	
	private $apiParas = array();
	
	public function setEventDto($eventDto)
	{
		$this->eventDto = $eventDto;
		$this->apiParas["event_dto"] = $eventDto;
	}

	public function getEventDto()
	{
		return $this->eventDto;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.event.change";
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

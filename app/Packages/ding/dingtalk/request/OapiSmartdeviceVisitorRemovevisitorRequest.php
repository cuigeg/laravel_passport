<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.visitor.removevisitor request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiSmartdeviceVisitorRemovevisitorRequest
{
	/** 
	 * 预约编号
	 **/
	private $reservationId;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.visitor.removevisitor";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reservationId,"reservationId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

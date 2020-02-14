<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.visitor.editvisitor request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiSmartdeviceVisitorEditvisitorRequest
{
	/** 
	 * 预约编号
	 **/
	private $reservationId;
	
	/** 
	 * 预约数据
	 **/
	private $visitorVo;
	
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

	public function setVisitorVo($visitorVo)
	{
		$this->visitorVo = $visitorVo;
		$this->apiParas["visitor_vo"] = $visitorVo;
	}

	public function getVisitorVo()
	{
		return $this->visitorVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.visitor.editvisitor";
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

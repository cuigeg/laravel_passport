<?php
/**
 * dingtalk API: dingtalk.oapi.pbp.instance.create request
 * 
 * @author auto create
 * @since 1.0, 2019.12.23
 */
class OapiPbpInstanceCreateRequest
{
	/** 
	 * 是否启用，建议传入该参数，只有启用状态的实例才允许打卡。如果不传入该参数，则实例默认为“已创建”状态而非“启用”状态。
	 **/
	private $active;
	
	/** 
	 * 业务id，接入时由系统分配
	 **/
	private $bizId;
	
	/** 
	 * 实例结束时间，时间戳
	 **/
	private $endTime;
	
	/** 
	 * 外部id，唯一对应一次业务实例，如一次会议的meeting_id
	 **/
	private $outerId;
	
	/** 
	 * 实例开始时间，时间戳
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setActive($active)
	{
		$this->active = $active;
		$this->apiParas["active"] = $active;
	}

	public function getActive()
	{
		return $this->active;
	}

	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.pbp.instance.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

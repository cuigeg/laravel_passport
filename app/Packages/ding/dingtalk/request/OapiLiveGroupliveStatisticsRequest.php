<?php
/**
 * dingtalk API: dingtalk.oapi.live.grouplive.statistics request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiLiveGroupliveStatisticsRequest
{
	/** 
	 * 群id
	 **/
	private $cid;
	
	/** 
	 * 直播uuid
	 **/
	private $liveUuid;
	
	/** 
	 * 用户id
	 **/
	private $openId;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setLiveUuid($liveUuid)
	{
		$this->liveUuid = $liveUuid;
		$this->apiParas["live_uuid"] = $liveUuid;
	}

	public function getLiveUuid()
	{
		return $this->liveUuid;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.live.grouplive.statistics";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->liveUuid,"liveUuid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

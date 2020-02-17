<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.face.recognition request
 * 
 * @author auto create
 * @since 1.0, 2019.11.19
 */
class OapiAttendanceFaceRecognitionRequest
{
	/** 
	 * 钉钉mediaId
	 **/
	private $mediaId;
	
	private $apiParas = array();
	
	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["media_id"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.face.recognition";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

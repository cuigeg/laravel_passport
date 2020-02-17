<?php
/**
 * dingtalk API: dingtalk.oapi.conference.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiConferenceGetRequest
{
	/** 
	 * 会务Id
	 **/
	private $conferenceId;
	
	private $apiParas = array();
	
	public function setConferenceId($conferenceId)
	{
		$this->conferenceId = $conferenceId;
		$this->apiParas["conference_id"] = $conferenceId;
	}

	public function getConferenceId()
	{
		return $this->conferenceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.conference.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->conferenceId,"conferenceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

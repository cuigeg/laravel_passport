<?php
/**
 * dingtalk API: dingtalk.oapi.live.playback request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiLivePlaybackRequest
{
	/** 
	 * 回放查询请求model
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.live.playback";
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

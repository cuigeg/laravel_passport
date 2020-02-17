<?php
/**
 * dingtalk API: dingtalk.oapi.ccoservice.entrance.sendnotify request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiCcoserviceEntranceSendnotifyRequest
{
	/** 
	 * 微应用ID
	 **/
	private $appId;
	
	/** 
	 * 文本的通知
	 **/
	private $content;
	
	/** 
	 * 员工ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ccoservice.entrance.sendnotify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

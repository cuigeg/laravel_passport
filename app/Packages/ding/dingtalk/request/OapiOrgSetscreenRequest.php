<?php
/**
 * dingtalk API: dingtalk.oapi.org.setscreen request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiOrgSetscreenRequest
{
	/** 
	 * yyyy-MM-dd显示截止时间
	 **/
	private $endTime;
	
	/** 
	 * 点击开机图片跳转地址
	 **/
	private $jumpUrl;
	
	/** 
	 * 开机图片资源id，可以通过/media/upload接口上传图片获取
	 **/
	private $mediaId;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setJumpUrl($jumpUrl)
	{
		$this->jumpUrl = $jumpUrl;
		$this->apiParas["jumpUrl"] = $jumpUrl;
	}

	public function getJumpUrl()
	{
		return $this->jumpUrl;
	}

	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["mediaId"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.setscreen";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

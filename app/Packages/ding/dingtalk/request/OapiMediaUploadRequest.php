<?php
/**
 * dingtalk API: dingtalk.oapi.media.upload request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiMediaUploadRequest
{
	/** 
	 * form-data中媒体文件标识，有filename、filelength、content-type等信息
	 **/
	private $media;
	
	/** 
	 * 媒体文件类型，分别有图片（image）、语音（voice）、普通文件(file)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setMedia($media)
	{
		$this->media = $media;
		$this->apiParas["media"] = $media;
	}

	public function getMedia()
	{
		return $this->media;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.media.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->media,"media");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

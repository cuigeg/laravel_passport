<?php
/**
 * dingtalk API: dingtalk.oapi.org.setoaurl request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiOrgSetoaurlRequest
{
	/** 
	 * 工作台名称，认证企业才能设置
	 **/
	private $oaTitle;
	
	/** 
	 * 工作台首页地址，必须是https开头
	 **/
	private $oaUrl;
	
	private $apiParas = array();
	
	public function setOaTitle($oaTitle)
	{
		$this->oaTitle = $oaTitle;
		$this->apiParas["oa_title"] = $oaTitle;
	}

	public function getOaTitle()
	{
		return $this->oaTitle;
	}

	public function setOaUrl($oaUrl)
	{
		$this->oaUrl = $oaUrl;
		$this->apiParas["oa_url"] = $oaUrl;
	}

	public function getOaUrl()
	{
		return $this->oaUrl;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.org.setoaurl";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oaUrl,"oaUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

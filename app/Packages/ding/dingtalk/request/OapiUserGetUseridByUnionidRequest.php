<?php
/**
 * dingtalk API: dingtalk.oapi.user.getUseridByUnionid request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserGetUseridByUnionidRequest
{
	/** 
	 * 用户在当前钉钉开放平台账号范围内的唯一标识，同一个钉钉开放平台账号可以包含多个开放应用，同时也包含ISV的套件应用及企业应用
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setUnionid($unionid)
	{
		$this->unionid = $unionid;
		$this->apiParas["unionid"] = $unionid;
	}

	public function getUnionid()
	{
		return $this->unionid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.getUseridByUnionid";
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

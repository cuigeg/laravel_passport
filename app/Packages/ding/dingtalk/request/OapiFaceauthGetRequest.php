<?php
/**
 * dingtalk API: dingtalk.oapi.faceauth.get request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiFaceauthGetRequest
{
	/** 
	 * 业务方定义的id
	 **/
	private $appBizId;
	
	/** 
	 * 人脸扫描的授权码
	 **/
	private $tmpAuthCode;
	
	private $apiParas = array();
	
	public function setAppBizId($appBizId)
	{
		$this->appBizId = $appBizId;
		$this->apiParas["app_biz_id"] = $appBizId;
	}

	public function getAppBizId()
	{
		return $this->appBizId;
	}

	public function setTmpAuthCode($tmpAuthCode)
	{
		$this->tmpAuthCode = $tmpAuthCode;
		$this->apiParas["tmp_auth_code"] = $tmpAuthCode;
	}

	public function getTmpAuthCode()
	{
		return $this->tmpAuthCode;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.faceauth.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appBizId,"appBizId");
		RequestCheckUtil::checkNotNull($this->tmpAuthCode,"tmpAuthCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

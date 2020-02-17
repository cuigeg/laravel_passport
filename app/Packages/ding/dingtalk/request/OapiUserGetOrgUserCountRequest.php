<?php
/**
 * dingtalk API: dingtalk.oapi.user.get_org_user_count request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserGetOrgUserCountRequest
{
	/** 
	 * 0：包含未激活钉钉的人员数量 1：不包含未激活钉钉的人员数量
	 **/
	private $onlyActive;
	
	private $apiParas = array();
	
	public function setOnlyActive($onlyActive)
	{
		$this->onlyActive = $onlyActive;
		$this->apiParas["onlyActive"] = $onlyActive;
	}

	public function getOnlyActive()
	{
		return $this->onlyActive;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.get_org_user_count";
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

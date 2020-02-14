<?php
/**
 * dingtalk API: dingtalk.oapi.user.associated_unionid.transfer request
 * 
 * @author auto create
 * @since 1.0, 2020.01.14
 */
class OapiUserAssociatedUnionidTransferRequest
{
	/** 
	 * 用户统一ID
	 **/
	private $associatedUnionid;
	
	private $apiParas = array();
	
	public function setAssociatedUnionid($associatedUnionid)
	{
		$this->associatedUnionid = $associatedUnionid;
		$this->apiParas["associated_unionid"] = $associatedUnionid;
	}

	public function getAssociatedUnionid()
	{
		return $this->associatedUnionid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.associated_unionid.transfer";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->associatedUnionid,"associatedUnionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.callback.failrecord.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiCallbackFailrecordListRequest
{
	/** 
	 * 请求参数
	 **/
	private $req;
	
	private $apiParas = array();
	
	public function setReq($req)
	{
		$this->req = $req;
		$this->apiParas["req"] = $req;
	}

	public function getReq()
	{
		return $this->req;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.callback.failrecord.list";
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

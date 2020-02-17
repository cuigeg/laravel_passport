<?php
/**
 * dingtalk API: dingtalk.oapi.user.batchdelete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiUserBatchdeleteRequest
{
	/** 
	 * 员工UserID列表。列表长度在1到20之间
	 **/
	private $useridlist;
	
	private $apiParas = array();
	
	public function setUseridlist($useridlist)
	{
		$this->useridlist = $useridlist;
		$this->apiParas["useridlist"] = $useridlist;
	}

	public function getUseridlist()
	{
		return $this->useridlist;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.batchdelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->useridlist,20,"useridlist");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.serviceaccount.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.09
 */
class OapiServiceaccountListRequest
{
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 页码，第几页，从1开始算
	 **/
	private $pageStart;
	
	private $apiParas = array();
	
	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPageStart($pageStart)
	{
		$this->pageStart = $pageStart;
		$this->apiParas["pageStart"] = $pageStart;
	}

	public function getPageStart()
	{
		return $this->pageStart;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.serviceaccount.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageStart,1,"pageStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

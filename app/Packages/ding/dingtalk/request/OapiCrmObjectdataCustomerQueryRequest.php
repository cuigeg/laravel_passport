<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.customer.query request
 * 
 * @author auto create
 * @since 1.0, 2020.01.09
 */
class OapiCrmObjectdataCustomerQueryRequest
{
	/** 
	 * 用户ID
	 **/
	private $currentOperatorUserid;
	
	/** 
	 * 分页游标
	 **/
	private $cursor;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrentOperatorUserid($currentOperatorUserid)
	{
		$this->currentOperatorUserid = $currentOperatorUserid;
		$this->apiParas["current_operator_userid"] = $currentOperatorUserid;
	}

	public function getCurrentOperatorUserid()
	{
		return $this->currentOperatorUserid;
	}

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectdata.customer.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

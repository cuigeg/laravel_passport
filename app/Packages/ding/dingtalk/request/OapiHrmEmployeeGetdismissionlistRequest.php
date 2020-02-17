<?php
/**
 * dingtalk API: dingtalk.oapi.hrm.employee.getdismissionlist request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiHrmEmployeeGetdismissionlistRequest
{
	/** 
	 * 第几页，从1开始
	 **/
	private $current;
	
	/** 
	 * 操作人userid
	 **/
	private $opUserid;
	
	/** 
	 * 一页多少数据，在1-100之间
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrent($current)
	{
		$this->current = $current;
		$this->apiParas["current"] = $current;
	}

	public function getCurrent()
	{
		return $this->current;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
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
		return "dingtalk.oapi.hrm.employee.getdismissionlist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->current,"current");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

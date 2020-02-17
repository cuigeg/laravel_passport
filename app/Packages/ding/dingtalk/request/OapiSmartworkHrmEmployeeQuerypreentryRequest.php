<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.querypreentry request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartworkHrmEmployeeQuerypreentryRequest
{
	/** 
	 * 分页起始值，默认0开始
	 **/
	private $offset;
	
	/** 
	 * 分页大小，最大50
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.querypreentry";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkMinValue($this->offset,0,"offset");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,50,"size");
		RequestCheckUtil::checkMinValue($this->size,1,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

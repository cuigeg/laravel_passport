<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.querydimission request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartworkHrmEmployeeQuerydimissionRequest
{
	/** 
	 * 分页游标，从0开始。根据返回结果里的next_cursor是否为空来判断是否还有下一页，且再次调用时offset设置成next_cursor的值
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
		return "dingtalk.oapi.smartwork.hrm.employee.querydimission";
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

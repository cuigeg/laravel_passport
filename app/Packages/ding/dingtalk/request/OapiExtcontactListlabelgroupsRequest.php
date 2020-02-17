<?php
/**
 * dingtalk API: dingtalk.oapi.extcontact.listlabelgroups request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiExtcontactListlabelgroupsRequest
{
	/** 
	 * 偏移位置
	 **/
	private $offset;
	
	/** 
	 * 分页大小,最大100
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
		return "dingtalk.oapi.extcontact.listlabelgroups";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->size,100,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.catering.store.get request
 * 
 * @author auto create
 * @since 1.0, 2020.01.17
 */
class OapiCateringStoreGetRequest
{
	/** 
	 * 分页查询起始记录行号
	 **/
	private $offset;
	
	/** 
	 * 每页返回的记录数
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
		return "dingtalk.oapi.catering.store.get";
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

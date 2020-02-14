<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.printdetail.get request
 * 
 * @author auto create
 * @since 1.0, 2019.10.15
 */
class OapiSmartdevicePrintdetailGetRequest
{
	/** 
	 * 起始游标，从0开始
	 **/
	private $cursor;
	
	/** 
	 * 每页大小，1-100
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
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
		return "dingtalk.oapi.smartdevice.printdetail.get";
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

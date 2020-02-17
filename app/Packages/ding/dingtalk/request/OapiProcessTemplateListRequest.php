<?php
/**
 * dingtalk API: dingtalk.oapi.process.template.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessTemplateListRequest
{
	/** 
	 * 游标属性
	 **/
	private $offset;
	
	/** 
	 * 每页数量
	 **/
	private $size;
	
	/** 
	 * abc123
	 **/
	private $userid;
	
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

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.template.list";
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

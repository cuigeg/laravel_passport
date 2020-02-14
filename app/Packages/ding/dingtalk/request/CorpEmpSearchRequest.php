<?php
/**
 * dingtalk API: dingtalk.corp.emp.search request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpEmpSearchRequest
{
	/** 
	 * 搜索关键字
	 **/
	private $keyword;
	
	/** 
	 * 偏移量
	 **/
	private $offset;
	
	/** 
	 * 请求数量
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

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
		return "dingtalk.corp.emp.search";
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

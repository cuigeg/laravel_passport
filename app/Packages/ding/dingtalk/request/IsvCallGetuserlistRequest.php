<?php
/**
 * dingtalk API: dingtalk.isv.call.getuserlist request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class IsvCallGetuserlistRequest
{
	/** 
	 * 批量值
	 **/
	private $offset;
	
	/** 
	 * 游标开始值
	 **/
	private $start;
	
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

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function getApiMethodName()
	{
		return "dingtalk.isv.call.getuserlist";
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

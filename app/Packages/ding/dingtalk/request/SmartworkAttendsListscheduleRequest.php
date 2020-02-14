<?php
/**
 * dingtalk API: dingtalk.smartwork.attends.listschedule request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class SmartworkAttendsListscheduleRequest
{
	/** 
	 * 偏移位置
	 **/
	private $offset;
	
	/** 
	 * 分页大小，最大200
	 **/
	private $size;
	
	/** 
	 * 排班时间，只取年月日部分
	 **/
	private $workDate;
	
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

	public function setWorkDate($workDate)
	{
		$this->workDate = $workDate;
		$this->apiParas["work_date"] = $workDate;
	}

	public function getWorkDate()
	{
		return $this->workDate;
	}

	public function getApiMethodName()
	{
		return "dingtalk.smartwork.attends.listschedule";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->workDate,"workDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

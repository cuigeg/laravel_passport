<?php
/**
 * dingtalk API: dingtalk.corp.calendar.create request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpCalendarCreateRequest
{
	/** 
	 * 创建日程实体
	 **/
	private $createVo;
	
	private $apiParas = array();
	
	public function setCreateVo($createVo)
	{
		$this->createVo = $createVo;
		$this->apiParas["create_vo"] = $createVo;
	}

	public function getCreateVo()
	{
		return $this->createVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.calendar.create";
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

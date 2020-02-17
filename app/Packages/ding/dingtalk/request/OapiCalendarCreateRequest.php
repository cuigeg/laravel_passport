<?php
/**
 * dingtalk API: dingtalk.oapi.calendar.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiCalendarCreateRequest
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
		return "dingtalk.oapi.calendar.create";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.device.querylist request
 * 
 * @author auto create
 * @since 1.0, 2020.02.07
 */
class OapiSmartdeviceDeviceQuerylistRequest
{
	/** 
	 * 列表查询对象
	 **/
	private $pageQueryVo;
	
	private $apiParas = array();
	
	public function setPageQueryVo($pageQueryVo)
	{
		$this->pageQueryVo = $pageQueryVo;
		$this->apiParas["page_query_vo"] = $pageQueryVo;
	}

	public function getPageQueryVo()
	{
		return $this->pageQueryVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.device.querylist";
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

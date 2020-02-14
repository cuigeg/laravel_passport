<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.visitor.addvisitor request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiSmartdeviceVisitorAddvisitorRequest
{
	/** 
	 * 访客预约模型
	 **/
	private $visitorVo;
	
	private $apiParas = array();
	
	public function setVisitorVo($visitorVo)
	{
		$this->visitorVo = $visitorVo;
		$this->apiParas["visitor_vo"] = $visitorVo;
	}

	public function getVisitorVo()
	{
		return $this->visitorVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.visitor.addvisitor";
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

<?php
/**
 * dingtalk API: dingtalk.oapi.process.property.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessPropertyUpdateRequest
{
	/** 
	 * 控件id
	 **/
	private $componentId;
	
	/** 
	 * 模板code
	 **/
	private $processCode;
	
	/** 
	 * 控件属性集
	 **/
	private $props;
	
	/** 
	 * 员工工号 企业唯一
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setComponentId($componentId)
	{
		$this->componentId = $componentId;
		$this->apiParas["component_id"] = $componentId;
	}

	public function getComponentId()
	{
		return $this->componentId;
	}

	public function setProcessCode($processCode)
	{
		$this->processCode = $processCode;
		$this->apiParas["process_code"] = $processCode;
	}

	public function getProcessCode()
	{
		return $this->processCode;
	}

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
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
		return "dingtalk.oapi.process.property.update";
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

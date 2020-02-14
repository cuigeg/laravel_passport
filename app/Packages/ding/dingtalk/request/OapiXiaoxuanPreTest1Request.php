<?php
/**
 * dingtalk API: dingtalk.oapi.xiaoxuan.pre.test1 request
 * 
 * @author auto create
 * @since 1.0, 2020.01.10
 */
class OapiXiaoxuanPreTest1Request
{
	/** 
	 * 1
	 **/
	private $name;
	
	/** 
	 * 1
	 **/
	private $systemData;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setSystemData($systemData)
	{
		$this->systemData = $systemData;
		$this->apiParas["systemData"] = $systemData;
	}

	public function getSystemData()
	{
		return $this->systemData;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.xiaoxuan.pre.test1";
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

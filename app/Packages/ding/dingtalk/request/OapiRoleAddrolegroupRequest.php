<?php
/**
 * dingtalk API: dingtalk.oapi.role.addrolegroup request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiRoleAddrolegroupRequest
{
	/** 
	 * 名称
	 **/
	private $name;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.role.addrolegroup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

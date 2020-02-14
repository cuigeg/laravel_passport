<?php
/**
 * dingtalk API: dingtalk.oapi.department.get request
 * 
 * @author auto create
 * @since 1.0, 2019.12.17
 */
class OapiDepartmentGetRequest
{
	/** 
	 * 部门id
	 **/
	private $id;
	
	/** 
	 * 通讯录语言(默认zh_CN，未来会支持en_US)
	 **/
	private $lang;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.department.get";
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

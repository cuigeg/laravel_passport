<?php
/**
 * dingtalk API: dingtalk.corp.role.removerolesforemps request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpRoleRemoverolesforempsRequest
{
	/** 
	 * 角色标签id
	 **/
	private $roleidList;
	
	/** 
	 * 用户userId
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setRoleidList($roleidList)
	{
		$this->roleidList = $roleidList;
		$this->apiParas["roleid_list"] = $roleidList;
	}

	public function getRoleidList()
	{
		return $this->roleidList;
	}

	public function setUseridList($useridList)
	{
		$this->useridList = $useridList;
		$this->apiParas["userid_list"] = $useridList;
	}

	public function getUseridList()
	{
		return $this->useridList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.role.removerolesforemps";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->roleidList,"roleidList");
		RequestCheckUtil::checkMaxListSize($this->roleidList,20,"roleidList");
		RequestCheckUtil::checkNotNull($this->useridList,"useridList");
		RequestCheckUtil::checkMaxListSize($this->useridList,100,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

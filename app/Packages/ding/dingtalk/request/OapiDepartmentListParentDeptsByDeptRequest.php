<?php
/**
 * dingtalk API: dingtalk.oapi.department.list_parent_depts_by_dept request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiDepartmentListParentDeptsByDeptRequest
{
	/** 
	 * 部门id
	 **/
	private $id;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.department.list_parent_depts_by_dept";
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

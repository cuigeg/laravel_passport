<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.list request
 * 
 * @author auto create
 * @since 1.0, 2020.01.14
 */
class OapiCrmObjectdataListRequest
{
	/** 
	 * 操作人用户ID
	 **/
	private $currentOperatorUserid;
	
	/** 
	 * 数据ID列表
	 **/
	private $dataIdList;
	
	/** 
	 * 表单名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setCurrentOperatorUserid($currentOperatorUserid)
	{
		$this->currentOperatorUserid = $currentOperatorUserid;
		$this->apiParas["current_operator_userid"] = $currentOperatorUserid;
	}

	public function getCurrentOperatorUserid()
	{
		return $this->currentOperatorUserid;
	}

	public function setDataIdList($dataIdList)
	{
		$this->dataIdList = $dataIdList;
		$this->apiParas["data_id_list"] = $dataIdList;
	}

	public function getDataIdList()
	{
		return $this->dataIdList;
	}

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
		return "dingtalk.oapi.crm.objectdata.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dataIdList,"dataIdList");
		RequestCheckUtil::checkMaxListSize($this->dataIdList,100,"dataIdList");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

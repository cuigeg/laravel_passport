<?php
/**
 * dingtalk API: dingtalk.isv.call.setuserlist request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class IsvCallSetuserlistRequest
{
	/** 
	 * 套件所所属企业免费电话主叫人员工号列表
	 **/
	private $staffIdList;
	
	private $apiParas = array();
	
	public function setStaffIdList($staffIdList)
	{
		$this->staffIdList = $staffIdList;
		$this->apiParas["staff_id_list"] = $staffIdList;
	}

	public function getStaffIdList()
	{
		return $this->staffIdList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.isv.call.setuserlist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->staffIdList,"staffIdList");
		RequestCheckUtil::checkMaxListSize($this->staffIdList,20,"staffIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

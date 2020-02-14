<?php
/**
 * dingtalk API: dingtalk.oapi.pbp.instance.group.create request
 * 
 * @author auto create
 * @since 1.0, 2019.12.21
 */
class OapiPbpInstanceGroupCreateRequest
{
	/** 
	 * 打卡组创建参数
	 **/
	private $groupParam;
	
	private $apiParas = array();
	
	public function setGroupParam($groupParam)
	{
		$this->groupParam = $groupParam;
		$this->apiParas["group_param"] = $groupParam;
	}

	public function getGroupParam()
	{
		return $this->groupParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.pbp.instance.group.create";
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

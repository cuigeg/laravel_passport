<?php
/**
 * dingtalk API: dingtalk.oapi.message.corpconversation.asyncsend_v2 request
 * 
 * @author auto create
 * @since 1.0, 2019.12.16
 */
class OapiMessageCorpconversationAsyncsendV2Request
{
	/** 
	 * 微应用的id
	 **/
	private $agentId;
	
	/** 
	 * 接收者的部门id列表
	 **/
	private $deptIdList;
	
	/** 
	 * 消息体，具体见文档
	 **/
	private $msg;
	
	/** 
	 * 是否发送给企业全部用户
	 **/
	private $toAllUser;
	
	/** 
	 * 接收者的用户userid列表
	 **/
	private $useridList;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setDeptIdList($deptIdList)
	{
		$this->deptIdList = $deptIdList;
		$this->apiParas["dept_id_list"] = $deptIdList;
	}

	public function getDeptIdList()
	{
		return $this->deptIdList;
	}

	public function setMsg($msg)
	{
		$this->msg = $msg;
		$this->apiParas["msg"] = $msg;
	}

	public function getMsg()
	{
		return $this->msg;
	}

	public function setToAllUser($toAllUser)
	{
		$this->toAllUser = $toAllUser;
		$this->apiParas["to_all_user"] = $toAllUser;
	}

	public function getToAllUser()
	{
		return $this->toAllUser;
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
		return "dingtalk.oapi.message.corpconversation.asyncsend_v2";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkMaxListSize($this->deptIdList,500,"deptIdList");
		RequestCheckUtil::checkMaxListSize($this->useridList,5000,"useridList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

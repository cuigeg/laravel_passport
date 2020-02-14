<?php
/**
 * dingtalk API: dingtalk.oapi.blackboard.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.11.04
 */
class OapiBlackboardDeleteRequest
{
	/** 
	 * 公告id,可以通过https://oapi.dingtalk.com/blackboard/listids获取有效值
	 **/
	private $blackboardId;
	
	/** 
	 * 操作人userId(必须是公告管理员)
	 **/
	private $operationUserid;
	
	private $apiParas = array();
	
	public function setBlackboardId($blackboardId)
	{
		$this->blackboardId = $blackboardId;
		$this->apiParas["blackboard_id"] = $blackboardId;
	}

	public function getBlackboardId()
	{
		return $this->blackboardId;
	}

	public function setOperationUserid($operationUserid)
	{
		$this->operationUserid = $operationUserid;
		$this->apiParas["operation_userid"] = $operationUserid;
	}

	public function getOperationUserid()
	{
		return $this->operationUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.blackboard.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->blackboardId,"blackboardId");
		RequestCheckUtil::checkNotNull($this->operationUserid,"operationUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

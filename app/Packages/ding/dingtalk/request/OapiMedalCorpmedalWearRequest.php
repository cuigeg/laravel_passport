<?php
/**
 * dingtalk API: dingtalk.oapi.medal.corpmedal.wear request
 * 
 * @author auto create
 * @since 1.0, 2019.10.31
 */
class OapiMedalCorpmedalWearRequest
{
	/** 
	 * 1 佩戴，2 摘除
	 **/
	private $operation;
	
	/** 
	 * 勋章模板ID
	 **/
	private $templateId;
	
	/** 
	 * 员工ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setOperation($operation)
	{
		$this->operation = $operation;
		$this->apiParas["operation"] = $operation;
	}

	public function getOperation()
	{
		return $this->operation;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.medal.corpmedal.wear";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operation,"operation");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.process.template.upgrade request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessTemplateUpgradeRequest
{
	/** 
	 * 明细组件id
	 **/
	private $detailComponentId;
	
	/** 
	 * 数组或金额类组件id
	 **/
	private $formComponentId;
	
	/** 
	 * 流程code
	 **/
	private $processCode;
	
	/** 
	 * 其实是staffId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setDetailComponentId($detailComponentId)
	{
		$this->detailComponentId = $detailComponentId;
		$this->apiParas["detail_component_id"] = $detailComponentId;
	}

	public function getDetailComponentId()
	{
		return $this->detailComponentId;
	}

	public function setFormComponentId($formComponentId)
	{
		$this->formComponentId = $formComponentId;
		$this->apiParas["form_component_id"] = $formComponentId;
	}

	public function getFormComponentId()
	{
		return $this->formComponentId;
	}

	public function setProcessCode($processCode)
	{
		$this->processCode = $processCode;
		$this->apiParas["process_code"] = $processCode;
	}

	public function getProcessCode()
	{
		return $this->processCode;
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
		return "dingtalk.oapi.process.template.upgrade";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->formComponentId,"formComponentId");
		RequestCheckUtil::checkNotNull($this->processCode,"processCode");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * dingtalk API: dingtalk.oapi.process.template.save request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiProcessTemplateSaveRequest
{
	/** 
	 * 字体
	 **/
	private $font;
	
	/** 
	 * 流程编码
	 **/
	private $processCode;
	
	/** 
	 * vm文件
	 **/
	private $vm;
	
	private $apiParas = array();
	
	public function setFont($font)
	{
		$this->font = $font;
		$this->apiParas["font"] = $font;
	}

	public function getFont()
	{
		return $this->font;
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

	public function setVm($vm)
	{
		$this->vm = $vm;
		$this->apiParas["vm"] = $vm;
	}

	public function getVm()
	{
		return $this->vm;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.process.template.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->font,"font");
		RequestCheckUtil::checkNotNull($this->processCode,"processCode");
		RequestCheckUtil::checkNotNull($this->vm,"vm");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

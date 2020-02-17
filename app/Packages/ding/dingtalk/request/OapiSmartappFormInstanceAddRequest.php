<?php
/**
 * dingtalk API: dingtalk.oapi.smartapp.form.instance.add request
 * 
 * @author auto create
 * @since 1.0, 2019.11.30
 */
class OapiSmartappFormInstanceAddRequest
{
	/** 
	 * 表单应用ID
	 **/
	private $appUuid;
	
	/** 
	 * 插入数据列表
	 **/
	private $dataList;
	
	/** 
	 * 表单ID
	 **/
	private $formCode;
	
	/** 
	 * 操作人ID
	 **/
	private $operatorUserid;
	
	private $apiParas = array();
	
	public function setAppUuid($appUuid)
	{
		$this->appUuid = $appUuid;
		$this->apiParas["app_uuid"] = $appUuid;
	}

	public function getAppUuid()
	{
		return $this->appUuid;
	}

	public function setDataList($dataList)
	{
		$this->dataList = $dataList;
		$this->apiParas["data_list"] = $dataList;
	}

	public function getDataList()
	{
		return $this->dataList;
	}

	public function setFormCode($formCode)
	{
		$this->formCode = $formCode;
		$this->apiParas["form_code"] = $formCode;
	}

	public function getFormCode()
	{
		return $this->formCode;
	}

	public function setOperatorUserid($operatorUserid)
	{
		$this->operatorUserid = $operatorUserid;
		$this->apiParas["operator_userid"] = $operatorUserid;
	}

	public function getOperatorUserid()
	{
		return $this->operatorUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartapp.form.instance.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appUuid,"appUuid");
		RequestCheckUtil::checkNotNull($this->formCode,"formCode");
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

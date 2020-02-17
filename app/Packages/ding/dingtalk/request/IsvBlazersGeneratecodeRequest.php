<?php
/**
 * dingtalk API: dingtalk.isv.blazers.generatecode request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class IsvBlazersGeneratecodeRequest
{
	/** 
	 * 业务对象唯一标示
	 **/
	private $bizId;
	
	/** 
	 * 具体业务场景下约定的数据，格式：Map<String,String>
	 **/
	private $ext;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function getApiMethodName()
	{
		return "dingtalk.isv.blazers.generatecode";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->ext,"ext");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

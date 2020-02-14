<?php
/**
 * dingtalk API: dingtalk.oapi.openencrypt.rotateedk request
 * 
 * @author auto create
 * @since 1.0, 2019.10.09
 */
class OapiOpenencryptRotateedkRequest
{
	/** 
	 * 请求参数
	 **/
	private $topEdkRotateManual;
	
	private $apiParas = array();
	
	public function setTopEdkRotateManual($topEdkRotateManual)
	{
		$this->topEdkRotateManual = $topEdkRotateManual;
		$this->apiParas["top_edk_rotate_manual"] = $topEdkRotateManual;
	}

	public function getTopEdkRotateManual()
	{
		return $this->topEdkRotateManual;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.openencrypt.rotateedk";
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

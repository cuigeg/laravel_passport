<?php
/**
 * dingtalk API: dingtalk.oapi.ding.send request
 * 
 * @author auto create
 * @since 1.0, 2019.07.25
 */
class OapiDingSendRequest
{
	/** 
	 * 发DING的请求体
	 **/
	private $openDingSendVo;
	
	private $apiParas = array();
	
	public function setOpenDingSendVo($openDingSendVo)
	{
		$this->openDingSendVo = $openDingSendVo;
		$this->apiParas["open_ding_send_vo"] = $openDingSendVo;
	}

	public function getOpenDingSendVo()
	{
		return $this->openDingSendVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ding.send";
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

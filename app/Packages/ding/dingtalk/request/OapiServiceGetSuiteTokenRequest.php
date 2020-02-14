<?php
/**
 * dingtalk API: dingtalk.oapi.service.get_suite_token request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OapiServiceGetSuiteTokenRequest
{
	/** 
	 * 套件key，开发者后台创建套件后获取
	 **/
	private $suiteKey;
	
	/** 
	 * 套件secret，开发者后台创建套件后获取
	 **/
	private $suiteSecret;
	
	/** 
	 * 钉钉推送的ticket
	 **/
	private $suiteTicket;
	
	private $apiParas = array();
	
	public function setSuiteKey($suiteKey)
	{
		$this->suiteKey = $suiteKey;
		$this->apiParas["suite_key"] = $suiteKey;
	}

	public function getSuiteKey()
	{
		return $this->suiteKey;
	}

	public function setSuiteSecret($suiteSecret)
	{
		$this->suiteSecret = $suiteSecret;
		$this->apiParas["suite_secret"] = $suiteSecret;
	}

	public function getSuiteSecret()
	{
		return $this->suiteSecret;
	}

	public function setSuiteTicket($suiteTicket)
	{
		$this->suiteTicket = $suiteTicket;
		$this->apiParas["suite_ticket"] = $suiteTicket;
	}

	public function getSuiteTicket()
	{
		return $this->suiteTicket;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.service.get_suite_token";
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

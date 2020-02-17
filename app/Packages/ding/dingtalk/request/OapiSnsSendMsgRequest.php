<?php
/**
 * dingtalk API: dingtalk.oapi.sns.send_msg request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSnsSendMsgRequest
{
	/** 
	 * form表单提交成功后获取的formId
	 **/
	private $code;
	
	/** 
	 * 消息内容
	 **/
	private $msg;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.sns.send_msg";
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

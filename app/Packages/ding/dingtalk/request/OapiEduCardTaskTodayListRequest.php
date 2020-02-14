<?php
/**
 * dingtalk API: dingtalk.oapi.edu.card.task.today.list request
 * 
 * @author auto create
 * @since 1.0, 2019.08.23
 */
class OapiEduCardTaskTodayListRequest
{
	/** 
	 * 打卡类型,跳绳:jump
	 **/
	private $cardType;
	
	/** 
	 * 用户userId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setCardType($cardType)
	{
		$this->cardType = $cardType;
		$this->apiParas["card_type"] = $cardType;
	}

	public function getCardType()
	{
		return $this->cardType;
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
		return "dingtalk.oapi.edu.card.task.today.list";
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

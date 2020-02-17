<?php
/**
 * dingtalk API: dingtalk.oapi.bipaas.notify.grouprobot request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiBipaasNotifyGrouprobotRequest
{
	/** 
	 * 群机器人通知请求
	 **/
	private $robotNotify;
	
	private $apiParas = array();
	
	public function setRobotNotify($robotNotify)
	{
		$this->robotNotify = $robotNotify;
		$this->apiParas["robot_notify"] = $robotNotify;
	}

	public function getRobotNotify()
	{
		return $this->robotNotify;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.bipaas.notify.grouprobot";
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

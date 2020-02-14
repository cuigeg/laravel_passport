<?php
/**
 * dingtalk API: dingtalk.oapi.ding.task.create request
 * 
 * @author auto create
 * @since 1.0, 2019.11.18
 */
class OapiDingTaskCreateRequest
{
	/** 
	 * 任务对外接口
	 **/
	private $taskSendVO;
	
	private $apiParas = array();
	
	public function setTaskSendVO($taskSendVO)
	{
		$this->taskSendVO = $taskSendVO;
		$this->apiParas["task_send_v_o"] = $taskSendVO;
	}

	public function getTaskSendVO()
	{
		return $this->taskSendVO;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ding.task.create";
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

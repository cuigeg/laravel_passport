<?php
/**
 * dingtalk API: dingtalk.oapi.robot.message.statistics.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiRobotMessageStatisticsListRequest
{
	/** 
	 * 当前页码
	 **/
	private $page;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 机器人消息推送Id列表
	 **/
	private $pushIds;
	
	private $apiParas = array();
	
	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPushIds($pushIds)
	{
		$this->pushIds = $pushIds;
		$this->apiParas["push_ids"] = $pushIds;
	}

	public function getPushIds()
	{
		return $this->pushIds;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.robot.message.statistics.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->pushIds,"pushIds");
		RequestCheckUtil::checkMaxListSize($this->pushIds,20,"pushIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

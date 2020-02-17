<?php
/**
 * dingtalk API: dingtalk.oapi.workbench.shortcut.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiWorkbenchShortcutListRequest
{
	/** 
	 * ISV微应用id
	 **/
	private $appId;
	
	/** 
	 * 当前页码
	 **/
	private $pageIndex;
	
	/** 
	 * 每页记录数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workbench.shortcut.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

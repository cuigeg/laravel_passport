<?php
/**
 * dingtalk API: dingtalk.oapi.workbench.shortcut.listbypaging request
 * 
 * @author auto create
 * @since 1.0, 2019.08.08
 */
class OapiWorkbenchShortcutListbypagingRequest
{
	/** 
	 * 当前页码
	 **/
	private $pageIndex;
	
	/** 
	 * 每页记录数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.workbench.shortcut.listbypaging";
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

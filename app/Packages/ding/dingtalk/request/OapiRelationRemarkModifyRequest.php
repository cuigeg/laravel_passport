<?php
/**
 * dingtalk API: dingtalk.oapi.relation.remark.modify request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiRelationRemarkModifyRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $markees;
	
	/** 
	 * 修改者的userid
	 **/
	private $markers;
	
	private $apiParas = array();
	
	public function setMarkees($markees)
	{
		$this->markees = $markees;
		$this->apiParas["markees"] = $markees;
	}

	public function getMarkees()
	{
		return $this->markees;
	}

	public function setMarkers($markers)
	{
		$this->markers = $markers;
		$this->apiParas["markers"] = $markers;
	}

	public function getMarkers()
	{
		return $this->markers;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.relation.remark.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->markers,"markers");
		RequestCheckUtil::checkMaxListSize($this->markers,100,"markers");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

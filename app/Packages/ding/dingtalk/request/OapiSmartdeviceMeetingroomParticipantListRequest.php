<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.meetingroom.participant.list request
 * 
 * @author auto create
 * @since 1.0, 2020.01.10
 */
class OapiSmartdeviceMeetingroomParticipantListRequest
{
	/** 
	 * 会议室预订id
	 **/
	private $bookid;
	
	/** 
	 * 分页游标
	 **/
	private $cursor;
	
	/** 
	 * 最大200(含)
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setBookid($bookid)
	{
		$this->bookid = $bookid;
		$this->apiParas["bookid"] = $bookid;
	}

	public function getBookid()
	{
		return $this->bookid;
	}

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartdevice.meetingroom.participant.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookid,"bookid");
		RequestCheckUtil::checkNotNull($this->size,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

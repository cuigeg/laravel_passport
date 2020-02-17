<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.facegroup.member.list request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceFacegroupMemberListRequest
{
	/** 
	 * 业务id
	 **/
	private $bizId;
	
	/** 
	 * 游标，第一次传 <=0的值，后续传本调用的返回值
	 **/
	private $cursor;
	
	/** 
	 * 分页大小
	 **/
	private $size;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
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
		return "dingtalk.oapi.smartdevice.facegroup.member.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkMaxLength($this->bizId,23,"bizId");
		RequestCheckUtil::checkNotNull($this->cursor,"cursor");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,500,"size");
		RequestCheckUtil::checkMinValue($this->size,1,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

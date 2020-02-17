<?php

/**
 * 事件对象
 * @author auto create
 */
class EventDto
{
	
	/** 
	 * 事件业务类型，参考com.dingtalk.customerservice.common.EventBizTypeEnum
	 **/
	public $biz_type;
	
	/** 
	 * buId(租户id)
	 **/
	public $bu_id;
	
	/** 
	 * 事件变更内容，json格式
	 **/
	public $event_body;
	
	/** 
	 * 事件code，参考com.dingtalk.customerservice.common.EventBizTypeEnum
	 **/
	public $event_code;
	
	/** 
	 * 事件的唯一性id，用于幂等
	 **/
	public $event_id;
	
	/** 
	 * 事件来源，com.dingtalk.customerservice.common.SourceEnum
	 **/
	public $source;	
}
?>
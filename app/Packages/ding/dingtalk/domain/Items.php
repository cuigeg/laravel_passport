<?php

/**
 * 日程的实体
 * @author auto create
 */
class Items
{
	
	/** 
	 * 参与者,考虑性能问题，该字段不向外透出
	 **/
	public $attendees;
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 内容描述
	 **/
	public $description;
	
	/** 
	 * 结束时间
	 **/
	public $end;
	
	/** 
	 * 日程跨域唯一id，用于唯一标识一组关联日程事件
	 **/
	public $i_cal_uid;
	
	/** 
	 * 日程事件id
	 **/
	public $id;
	
	/** 
	 * 地点
	 **/
	public $location;
	
	/** 
	 * 组织者
	 **/
	public $organizer;
	
	/** 
	 * 循环的规则
	 **/
	public $recurrence;
	
	/** 
	 * 响应状态（accepted, declined, needsAction）
	 **/
	public $response_status;
	
	/** 
	 * 开始时间
	 **/
	public $start;
	
	/** 
	 * 状态（confirmed、cancelled）
	 **/
	public $status;
	
	/** 
	 * 标题简述
	 **/
	public $summary;
	
	/** 
	 * 最后一次更新时间
	 **/
	public $updated;	
}
?>
<?php

/**
 * 业务结果
 * @author auto create
 */
class LeaveTypeVo
{
	
	/** 
	 * 假期类型，普通假期或者加班转调休假期。(general_leave、lieu_leave其中一种)
	 **/
	public $biz_type;
	
	/** 
	 * 每天折算的工作时长(百分之一 例如1天=10小时=1000)
	 **/
	public $hours_in_per_day;
	
	/** 
	 * 假期类型唯一标识
	 **/
	public $leave_code;
	
	/** 
	 * 假期名称
	 **/
	public $leave_name;
	
	/** 
	 * 请假单位，可以按照天半天或者小时请假。(day、halfday、hour其中一种)
	 **/
	public $leave_view_unit;
	
	/** 
	 * 是否按照自然日统计请假时长，当为false的时候，用户发起请假时候会根据用户在请假时间段内的排班情况来计算请假时长。
	 **/
	public $natural_day_leave;	
}
?>
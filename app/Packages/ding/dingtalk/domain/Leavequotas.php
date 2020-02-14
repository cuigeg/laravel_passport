<?php

/**
 * 假期余额列表
 * @author auto create
 */
class Leavequotas
{
	
	/** 
	 * 额度有效期结束时间(毫秒级时间戳)
	 **/
	public $end_time;
	
	/** 
	 * 假期类型唯一标识
	 **/
	public $leave_code;
	
	/** 
	 * 额度所对应的周期
	 **/
	public $quota_cycle;
	
	/** 
	 * 配额唯一标记
	 **/
	public $quota_id;
	
	/** 
	 * 单位以小时计算的额度总数(假期类型按小时计算该值不为空且按百分之一小时折算 例如 1000=10小时)
	 **/
	public $quota_num_per_day;
	
	/** 
	 * 单位以天计算的额度总数(假期类型按天计算该值不为空且按百分之一天折算 例如 1000=10天)
	 **/
	public $quota_num_per_hour;
	
	/** 
	 * 额度有效期开始时间(毫秒级时间戳)
	 **/
	public $start_time;
	
	/** 
	 * 单位以天计算的使用额度(假期类型按天计算该值不为空且按百分之一天折算 例如 100=1天)
	 **/
	public $used_num_per_day;
	
	/** 
	 * 单位以小时计算的使用额度(假期类型按小时计算该值不为空且按百分之一小时折算 例如 100=1小时)
	 **/
	public $used_num_per_hour;
	
	/** 
	 * 员工ID
	 **/
	public $userid;	
}
?>
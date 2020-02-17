<?php

/**
 * 卡点
 * @author auto create
 */
class TopPunchVo
{
	
	/** 
	 * 是否跨天
	 **/
	public $across;
	
	/** 
	 * 允许的最早提前打卡时间，分钟为单位
	 **/
	public $begin_min;
	
	/** 
	 * 打卡时间
	 **/
	public $check_time;
	
	/** 
	 * 打卡类型
	 **/
	public $check_type;
	
	/** 
	 * 允许的最晚延后打卡时间，分钟为单位
	 **/
	public $end_min;
	
	/** 
	 * 是否免打卡
	 **/
	public $free_check;
	
	/** 
	 * id
	 **/
	public $id;
	
	/** 
	 * 允许早退/迟到的时长
	 **/
	public $permit_minutes;	
}
?>
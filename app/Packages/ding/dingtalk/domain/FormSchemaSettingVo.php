<?php

/**
 * 设置
 * @author auto create
 */
class FormSchemaSettingVo
{
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 填表截止时间
	 **/
	public $end_time;
	
	/** 
	 * 0表示通用智能填表，1表示教育版填表
	 **/
	public $form_type;
	
	/** 
	 * 填表周期，周一到周日分别用1-7表示
	 **/
	public $loop_days;
	
	/** 
	 * 填表时间
	 **/
	public $loop_time;
	
	/** 
	 * 应填人数
	 **/
	public $should_participation_cnt;	
}
?>
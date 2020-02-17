<?php

/**
 * 班次设置
 * @author auto create
 */
class TopShiftSettingVo
{
	
	/** 
	 * 该班次对应的出勤天数
	 **/
	public $attend_days;
	
	/** 
	 * 企业id
	 **/
	public $corp_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 班次变更时间
	 **/
	public $gmt_modified;
	
	/** 
	 * id
	 **/
	public $id;
	
	/** 
	 * 删除标记
	 **/
	public $is_deleted;
	
	/** 
	 * 班次id
	 **/
	public $shift_id;
	
	/** 
	 * 工作时长，单位分钟，-1表示关闭该功能
	 **/
	public $work_time_minutes;	
}
?>
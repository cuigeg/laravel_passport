<?php

/**
 * 业务数据列表
 * @author auto create
 */
class Bizdatavo
{
	
	/** 
	 * 数据变更时间戳，用以保证更新操作的顺序性
	 **/
	public $biz_time;
	
	/** 
	 * 数据流水唯一标识，如流水号，用以唯一确认一条写入数据
	 **/
	public $biz_uk;
	
	/** 
	 * 数据字段列表
	 **/
	public $fields;
	
	/** 
	 * 业务域描述，系统分配，枚举见文档
	 **/
	public $scope;
	
	/** 
	 * 员工id
	 **/
	public $userid;	
}
?>
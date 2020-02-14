<?php

/**
 * 记录列表
 * @author auto create
 */
class AuditLogVO
{
	
	/** 
	 * 操作类型
	 **/
	public $action;
	
	/** 
	 * 操作类型翻译值
	 **/
	public $action_view;
	
	/** 
	 * 文件id
	 **/
	public $biz_id;
	
	/** 
	 * 记录生成时间，unix时间戳，单位ms
	 **/
	public $gmt_create;
	
	/** 
	 * 记录修改时间，unix时间戳，单位ms
	 **/
	public $gmt_modified;
	
	/** 
	 * 操作来源空间
	 **/
	public $operate_module;
	
	/** 
	 * 操作来源翻译值
	 **/
	public $operate_module_view;
	
	/** 
	 * 用户名字
	 **/
	public $operator_name;
	
	/** 
	 * 操作端
	 **/
	public $platform;
	
	/** 
	 * 操作端翻译值
	 **/
	public $platform_view;
	
	/** 
	 * 文件名
	 **/
	public $resource;
	
	/** 
	 * 记录状态
	 **/
	public $status;
	
	/** 
	 * 员工的userId
	 **/
	public $userid;	
}
?>
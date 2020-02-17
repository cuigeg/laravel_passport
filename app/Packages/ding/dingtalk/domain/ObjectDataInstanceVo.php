<?php

/**
 * 实例数据
 * @author auto create
 */
class ObjectDataInstanceVo
{
	
	/** 
	 * 记录创建人的昵称
	 **/
	public $creator_nick;
	
	/** 
	 * 记录创建人的用户ID
	 **/
	public $creator_userid;
	
	/** 
	 * 数据内容
	 **/
	public $data;
	
	/** 
	 * 扩展数据内容
	 **/
	public $extend_data;
	
	/** 
	 * 记录创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 记录修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 数据ID
	 **/
	public $instance_id;
	
	/** 
	 * 数据类型
	 **/
	public $object_type;
	
	/** 
	 * 数据权限信息
	 **/
	public $permission;	
}
?>
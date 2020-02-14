<?php

/**
 * 群机器人通知请求
 * @author auto create
 */
class GroupRobotNotifyDto
{
	
	/** 
	 * 需要@到的金融云租户下操作员列表
	 **/
	public $antcloud_operator_ids;
	
	/** 
	 * 金融云租户 ID
	 **/
	public $antcloud_tenant_id;
	
	/** 
	 * 对应消息格式内容
	 **/
	public $message_body;
	
	/** 
	 * 消息格式
	 **/
	public $message_type;
	
	/** 
	 * 钉钉群机器人地址
	 **/
	public $robot_url;	
}
?>
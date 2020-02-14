<?php

/**
 * 插入数据列表
 * @author auto create
 */
class FormInstanceWriteUnitVo
{
	
	/** 
	 * 业务主键
	 **/
	public $biz_id;
	
	/** 
	 * 数据负责人ID列表
	 **/
	public $charger_userid_list;
	
	/** 
	 * 数据创建人ID
	 **/
	public $creator_userid;
	
	/** 
	 * 组件值列表
	 **/
	public $form_component_values;
	
	/** 
	 * 协同人ID列表
	 **/
	public $participant_userid_list;	
}
?>
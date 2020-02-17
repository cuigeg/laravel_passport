<?php

/**
 * 请求
 * @author auto create
 */
class SaveFakeProcessInstanceRequest
{
	
	/** 
	 * 应用id
	 **/
	public $agentid;
	
	/** 
	 * 表单参数列表
	 **/
	public $form_component_values;
	
	/** 
	 * 审批发起人
	 **/
	public $originator_user_id;
	
	/** 
	 * 审批模板唯一码
	 **/
	public $process_code;
	
	/** 
	 * 实例标题
	 **/
	public $title;
	
	/** 
	 * 实例跳转链接
	 **/
	public $url;	
}
?>
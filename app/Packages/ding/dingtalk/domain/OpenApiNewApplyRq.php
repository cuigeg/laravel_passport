<?php

/**
 * 请求对象
 * @author auto create
 */
class OpenApiNewApplyRq
{
	
	/** 
	 * 企业名称
	 **/
	public $corp_name;
	
	/** 
	 * 企业id
	 **/
	public $corpid;
	
	/** 
	 * 部门名称
	 **/
	public $dept_name;
	
	/** 
	 * 部门id，如果不传，会根据user相关信息去获取对应的部门信息，如果传的是错误的部门信息，后面无法做部门的费用归属；部门ID只能是数字
	 **/
	public $deptid;
	
	/** 
	 * 行程列表
	 **/
	public $itinerary_list;
	
	/** 
	 * 审批单状态，不传入默认为0：0审批中，1同意，2拒绝
	 **/
	public $status;
	
	/** 
	 * 外部申请单id
	 **/
	public $thirdpart_apply_id;
	
	/** 
	 * 用户展示的外部审批单id信息
	 **/
	public $thirdpart_business_id;
	
	/** 
	 * 出行人列表
	 **/
	public $traveler_list;
	
	/** 
	 * 出差事由
	 **/
	public $trip_cause;
	
	/** 
	 * 出差天数
	 **/
	public $trip_day;
	
	/** 
	 * 申请单标题
	 **/
	public $trip_title;
	
	/** 
	 * 用户名称，如果要传必须传真实姓名，如果不传则会以系统当前维护userId对应的名称进行预订
	 **/
	public $user_name;
	
	/** 
	 * 用户id
	 **/
	public $userid;	
}
?>
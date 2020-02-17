<?php

/**
 * 订单列表
 * @author auto create
 */
class OpenVehicleOrderRs
{
	
	/** 
	 * 商旅系统审批单id
	 **/
	public $apply_id;
	
	/** 
	 * 商旅审批单展示id(非审批api对接企业)
	 **/
	public $apply_show_id;
	
	/** 
	 * 用车原因：TRAVEL: 差旅, TRAFFIC: 市内交通, WORK: 加班, OTHER: 其它
	 **/
	public $business_category;
	
	/** 
	 * 取消时间
	 **/
	public $cancel_time;
	
	/** 
	 * 车辆类型
	 **/
	public $car_info;
	
	/** 
	 * 类型级别：1经济型、2舒适型、3豪华型
	 **/
	public $car_level;
	
	/** 
	 * 企业名称
	 **/
	public $corp_name;
	
	/** 
	 * 企业id
	 **/
	public $corpid;
	
	/** 
	 * 商旅成本中心id
	 **/
	public $cost_center_id;
	
	/** 
	 * 成本中心名称
	 **/
	public $cost_center_name;
	
	/** 
	 * 成本中心编号
	 **/
	public $cost_center_number;
	
	/** 
	 * 部门名称
	 **/
	public $dept_name;
	
	/** 
	 * 部门id
	 **/
	public $deptid;
	
	/** 
	 * 司机到达目的地时间
	 **/
	public $driver_confirm_time;
	
	/** 
	 * 订单预估价格
	 **/
	public $estimate_price;
	
	/** 
	 * 出发地
	 **/
	public $from_address;
	
	/** 
	 * 出发城市
	 **/
	public $from_city_name;
	
	/** 
	 * 订单创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 订单更新时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 订单id
	 **/
	public $id;
	
	/** 
	 * 商旅发票id
	 **/
	public $invoice_id;
	
	/** 
	 * 发票抬头
	 **/
	public $invoice_title;
	
	/** 
	 * 打车事由
	 **/
	public $memo;
	
	/** 
	 * 订单状态:0:初始状态,1:已超时,2:派单成功,3:派单失败,4:已退款,5:已支付,6:已取消
	 **/
	public $order_status;
	
	/** 
	 * 乘客名称
	 **/
	public $passenger_name;
	
	/** 
	 * 支付时间
	 **/
	public $pay_time;
	
	/** 
	 * 价目详情列表
	 **/
	public $price_info_list;
	
	/** 
	 * 项目编号
	 **/
	public $project_code;
	
	/** 
	 * 项目名称
	 **/
	public $project_title;
	
	/** 
	 * 乘客发布用车时间
	 **/
	public $publish_time;
	
	/** 
	 * 实际出发城市
	 **/
	public $real_from_city_name;
	
	/** 
	 * 实际到达城市
	 **/
	public $real_to_city_name;
	
	/** 
	 * 打车服务类型 1:出租车, 2:专车, 3:快车
	 **/
	public $service_type;
	
	/** 
	 * 乘客上车时间
	 **/
	public $taken_time;
	
	/** 
	 * 第三方行程id
	 **/
	public $thirdpart_itinerary_id;
	
	/** 
	 * 目的地
	 **/
	public $to_address;
	
	/** 
	 * 目的城市
	 **/
	public $to_city_name;
	
	/** 
	 * 行驶公里数
	 **/
	public $travel_distance;
	
	/** 
	 * 出行人列表
	 **/
	public $user_affiliate_list;
	
	/** 
	 * 预定人名称
	 **/
	public $user_name;
	
	/** 
	 * 预定人id
	 **/
	public $userid;	
}
?>
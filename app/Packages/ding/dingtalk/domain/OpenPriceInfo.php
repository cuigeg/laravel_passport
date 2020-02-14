<?php

/**
 * 价目详情列表
 * @author auto create
 */
class OpenPriceInfo
{
	
	/** 
	 * 交易类型：用车支付, 服务费, 用车取消后收费, 用车退款, 用车赔付
	 **/
	public $category;
	
	/** 
	 * 流水创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 出行人，多个用‘,’分割
	 **/
	public $passenger_name;
	
	/** 
	 * 结算方式:1：个人现付，2:企业现付,4:企业月结，8、企业预存
	 **/
	public $pay_type;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 资金流向:1:支出，2:收入
	 **/
	public $type;	
}
?>
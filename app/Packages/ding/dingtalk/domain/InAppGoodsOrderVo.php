<?php

/**
 * 订单信息列表
 * @author auto create
 */
class InAppGoodsOrderVO
{
	
	/** 
	 * 订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 购买商品的企业开放Id
	 **/
	public $corp_id;
	
	/** 
	 * 订单创建时间戳
	 **/
	public $create_timestamp;
	
	/** 
	 * 商品码
	 **/
	public $goods_code;
	
	/** 
	 * 内购商品规格码
	 **/
	public $item_code;
	
	/** 
	 * 订单支付时间戳
	 **/
	public $paid_timestamp;
	
	/** 
	 * 订购数量，周期型商品该字段为空
	 **/
	public $quantity;
	
	/** 
	 * 订单状态，3 - 已支付状态
	 **/
	public $status;
	
	/** 
	 * 实际支付总金额，CNY(分)
	 **/
	public $total_actual_pay_fee;	
}
?>
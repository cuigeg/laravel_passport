<?php

/**
 * list
 * @author auto create
 */
class MealSettingList
{
	
	/** 
	 * 缩略地址，可为空
	 **/
	public $address;
	
	/** 
	 * 送餐详细地址
	 **/
	public $address_detail;
	
	/** 
	 * 企业corpId
	 **/
	public $corp_id;
	
	/** 
	 * 企业名称
	 **/
	public $corp_name;
	
	/** 
	 * 企业logo的url
	 **/
	public $logo;
	
	/** 
	 * mealItemList
	 **/
	public $meal_item_list;
	
	/** 
	 * 点餐时间枚举值：2-法定工作日3-双休及节假日
	 **/
	public $meal_time;	
}
?>
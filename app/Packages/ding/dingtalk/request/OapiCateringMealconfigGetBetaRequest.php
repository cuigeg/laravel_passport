<?php
/**
 * dingtalk API: dingtalk.oapi.catering.mealconfig.get.beta request
 * 
 * @author auto create
 * @since 1.0, 2019.11.21
 */
class OapiCateringMealconfigGetBetaRequest
{
	/** 
	 * 获取未来n天的可点餐时间（包括今天）如： 1， 则返回今天和明天的可点餐日期，最大值为13
	 **/
	private $mealDayOffset;
	
	private $apiParas = array();
	
	public function setMealDayOffset($mealDayOffset)
	{
		$this->mealDayOffset = $mealDayOffset;
		$this->apiParas["meal_day_offset"] = $mealDayOffset;
	}

	public function getMealDayOffset()
	{
		return $this->mealDayOffset;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.catering.mealconfig.get.beta";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mealDayOffset,"mealDayOffset");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

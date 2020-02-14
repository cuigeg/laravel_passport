<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.vacation.type.create request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAttendanceVacationTypeCreateRequest
{
	/** 
	 * 假期类型，普通假期或者加班转调休假期。(general_leave、lieu_leave其中一种)
	 **/
	private $bizType;
	
	/** 
	 * 调休假有效期规则(validity_type:有效类型 absolute_time(绝对时间)、relative_time(相对时间)其中一种 validity_value:延长日期(当validity_type为absolute_time该值该值不为空且满足yy-mm格式 validity_type为relative_time该值为大于1的整数))
	 **/
	private $extras;
	
	/** 
	 * 每天折算的工作时长(百分之一 例如1天=10小时=1000)
	 **/
	private $hoursInPerDay;
	
	/** 
	 * 假期名称
	 **/
	private $leaveName;
	
	/** 
	 * 请假单位，可以按照天半天或者小时请假。(day、halfday、hour其中一种)
	 **/
	private $leaveViewUnit;
	
	/** 
	 * 是否按照自然日统计请假时长，当为false的时候，用户发起请假时候会根据用户在请假时间段内的排班情况来计算请假时长
	 **/
	private $naturalDayLeave;
	
	/** 
	 * 操作者ID
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setExtras($extras)
	{
		$this->extras = $extras;
		$this->apiParas["extras"] = $extras;
	}

	public function getExtras()
	{
		return $this->extras;
	}

	public function setHoursInPerDay($hoursInPerDay)
	{
		$this->hoursInPerDay = $hoursInPerDay;
		$this->apiParas["hours_in_per_day"] = $hoursInPerDay;
	}

	public function getHoursInPerDay()
	{
		return $this->hoursInPerDay;
	}

	public function setLeaveName($leaveName)
	{
		$this->leaveName = $leaveName;
		$this->apiParas["leave_name"] = $leaveName;
	}

	public function getLeaveName()
	{
		return $this->leaveName;
	}

	public function setLeaveViewUnit($leaveViewUnit)
	{
		$this->leaveViewUnit = $leaveViewUnit;
		$this->apiParas["leave_view_unit"] = $leaveViewUnit;
	}

	public function getLeaveViewUnit()
	{
		return $this->leaveViewUnit;
	}

	public function setNaturalDayLeave($naturalDayLeave)
	{
		$this->naturalDayLeave = $naturalDayLeave;
		$this->apiParas["natural_day_leave"] = $naturalDayLeave;
	}

	public function getNaturalDayLeave()
	{
		return $this->naturalDayLeave;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.vacation.type.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->hoursInPerDay,"hoursInPerDay");
		RequestCheckUtil::checkNotNull($this->leaveName,"leaveName");
		RequestCheckUtil::checkNotNull($this->leaveViewUnit,"leaveViewUnit");
		RequestCheckUtil::checkNotNull($this->naturalDayLeave,"naturalDayLeave");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

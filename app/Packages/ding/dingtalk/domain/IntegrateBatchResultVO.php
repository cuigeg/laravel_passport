<?php

/**
 * 保存结果
 * @author auto create
 */
class IntegrateBatchResultVO
{
	
	/** 
	 * 是否全部保存成功
	 **/
	public $all_success;
	
	/** 
	 * 保存失败的结果，全部保存成功时为空
	 **/
	public $fail_result;	
}
?>
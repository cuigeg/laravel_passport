<?php

/**
 * 页数据结果
 * @author auto create
 */
class PageVO
{
	
	/** 
	 * 是否有更多记录
	 **/
	public $has_more;
	
	/** 
	 * 投屏数据列表
	 **/
	public $list;
	
	/** 
	 * 下一个游标
	 **/
	public $next_cursor;
	
	/** 
	 * 下一游标
	 **/
	public $next_cursor_string;	
}
?>
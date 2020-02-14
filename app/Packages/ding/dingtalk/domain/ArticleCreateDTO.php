<?php

/**
 * 文章参数对象
 * @author auto create
 */
class ArticleCreateDTO
{
	
	/** 
	 * 文章内容（html码）
	 **/
	public $content;
	
	/** 
	 * 摘要
	 **/
	public $digest;
	
	/** 
	 * 图文消息的封面图片素材id
	 **/
	public $thumb_media_id;
	
	/** 
	 * 标题
	 **/
	public $title;
	
	/** 
	 * 幂等参数
	 **/
	public $uuid;	
}
?>
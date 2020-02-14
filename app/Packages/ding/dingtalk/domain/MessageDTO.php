<?php

/**
 * 消息对象
 * @author auto create
 */
class MessageDTO
{
	
	/** 
	 * 会员所属组织
	 **/
	public $bu_id;
	
	/** 
	 * 会员id
	 **/
	public $cms_id;
	
	/** 
	 * 消息内容
	 **/
	public $content;
	
	/** 
	 * /**      * 文本      */     TEXT(1),      /**      * 图片      */     IMAGE(2),      /**      * 视频      */     VIDEO(3),      /**      * 链接      */     LINK(4),      /**      * 语音      */     VOICE(5),      /**      * markdown      */     MARK_DOWN(6),      /**      * 交互式卡片      */     ACTION_CARD(7),      /**      * 富文本      */     RICH_TEXT(8),      /**      * 文件      */     FILE(9),      /**      * 消息已读      */     MSG_READ(10)
	 **/
	public $content_type;
	
	/** 
	 * 消息生成时间
	 **/
	public $message_create_at;
	
	/** 
	 * 消息id
	 **/
	public $message_id;
	
	/** 
	 * 会话来源
	 **/
	public $session_source;
	
	/** 
	 * 会话id
	 **/
	public $sid;	
}
?>
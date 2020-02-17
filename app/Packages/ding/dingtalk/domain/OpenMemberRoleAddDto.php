<?php

/**
 * 成员设置角色
 * @author auto create
 */
class OpenMemberRoleAddDto
{
	
	/** 
	 * 角色，不允许空，list内的元素不允许null。最多20个
	 **/
	public $tags;
	
	/** 
	 * 成员id
	 **/
	public $userid;	
}
?>
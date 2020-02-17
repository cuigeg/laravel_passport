<?php

/**
 * 添加成员 最多20个
 * @author auto create
 */
class OpenMemberAddDto
{
	
	/** 
	 * 从哪个组织选人
	 **/
	public $from_corp_id;
	
	/** 
	 * 配合fromCorpId，在那个组织内的userid
	 **/
	public $from_userid;
	
	/** 
	 * 添加到新组织后，允许指定1个userId，但是有可能由于该userId与已新组织内已存在的员工userId重复报错。非必填。长度4-32位之间，仅允许（字母 数字 _ -）
	 **/
	public $userid;	
}
?>
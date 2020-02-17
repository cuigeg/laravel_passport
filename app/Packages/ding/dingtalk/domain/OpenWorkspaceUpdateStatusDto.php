<?php

/**
 * 更新状态
 * @author auto create
 */
class OpenWorkspaceUpdateStatusDto
{
	
	/** 
	 * 新建项目后状态是WORKING，WORKING和CLOSE可以切换，但是一旦成为DISBANDED则说明项目已销毁无法变更状态
	 **/
	public $status;	
}
?>
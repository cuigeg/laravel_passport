<?php
/**
 * dingtalk API: dingtalk.oapi.serviceaccount.menu.update request
 * 
 * @author auto create
 * @since 1.0, 2019.07.05
 */
class OapiServiceaccountMenuUpdateRequest
{
	/** 
	 * 菜单
	 **/
	private $menu;
	
	/** 
	 * 服务号的unionid
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setMenu($menu)
	{
		$this->menu = $menu;
		$this->apiParas["menu"] = $menu;
	}

	public function getMenu()
	{
		return $this->menu;
	}

	public function setUnionid($unionid)
	{
		$this->unionid = $unionid;
		$this->apiParas["unionid"] = $unionid;
	}

	public function getUnionid()
	{
		return $this->unionid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.serviceaccount.menu.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->unionid,"unionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

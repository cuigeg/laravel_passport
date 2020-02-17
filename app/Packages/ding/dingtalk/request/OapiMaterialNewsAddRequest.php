<?php
/**
 * dingtalk API: dingtalk.oapi.material.news.add request
 * 
 * @author auto create
 * @since 1.0, 2019.07.04
 */
class OapiMaterialNewsAddRequest
{
	/** 
	 * 文章列表
	 **/
	private $articles;
	
	/** 
	 * 服务号的unionid
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setArticles($articles)
	{
		$this->articles = $articles;
		$this->apiParas["articles"] = $articles;
	}

	public function getArticles()
	{
		return $this->articles;
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
		return "dingtalk.oapi.material.news.add";
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

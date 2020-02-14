<?php
/**
 * dingtalk API: dingtalk.oapi.material.article.delete request
 * 
 * @author auto create
 * @since 1.0, 2019.06.28
 */
class OapiMaterialArticleDeleteRequest
{
	/** 
	 * 文章id
	 **/
	private $articleId;
	
	/** 
	 * 服务号的unionid
	 **/
	private $unionid;
	
	private $apiParas = array();
	
	public function setArticleId($articleId)
	{
		$this->articleId = $articleId;
		$this->apiParas["article_id"] = $articleId;
	}

	public function getArticleId()
	{
		return $this->articleId;
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
		return "dingtalk.oapi.material.article.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->articleId,"articleId");
		RequestCheckUtil::checkNotNull($this->unionid,"unionid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

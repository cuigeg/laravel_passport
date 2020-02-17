<?php
/**
 * dingtalk API: dingtalk.corp.smartdevice.addface request
 * 
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpSmartdeviceAddfaceRequest
{
	/** 
	 * 识别用户数据
	 **/
	private $faceVo;
	
	private $apiParas = array();
	
	public function setFaceVo($faceVo)
	{
		$this->faceVo = $faceVo;
		$this->apiParas["face_vo"] = $faceVo;
	}

	public function getFaceVo()
	{
		return $this->faceVo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.smartdevice.addface";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

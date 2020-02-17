<?php


namespace App\Packages;


class UploadPart
{
    protected static $url;
    protected static $delimiter;
    protected static $instance;

    public function __construct() {
        static::$url = 'https://oapi.dingtalk.com/media/upload?access_token=f673712288393718886cb5878172e903&type=image';
        static::$delimiter = uniqid();
    }

    public function putPart($param) {
        $post_data = static::buildData($param);
        $curl = curl_init(static::$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Content-Type: multipart/form-data; boundary=" . static::$delimiter,
            "Content-Length: " . strlen($post_data)
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $info = json_decode($response, true);
        dd($info);
        if (!is_array($info['Msg']) && $info['Msg'] == $param['filesize']) {
            $param['offset'] = $param['filesize'];
            $param['upload'] = '';
            return $this->putPart($param);
        }
        return $response;
    }

    private static function buildData($param){
        $data = '';
        $eol = "\r\n";
        $upload = $param['upload'];
        unset($param['upload']);

        foreach ($param as $name => $content) {
            $data .= "--" . static::$delimiter . "\r\n"
                . 'Content-Disposition: form-data; name="' . $name . "\"\r\n\r\n"
            . $content . "\r\n";
        }
        // 拼接文件流
        $data .= "--" . static::$delimiter . $eol
            . 'Content-Disposition: form-data; name="media"; filename="' . $param['filename'] . '"' . "\r\n"
        . 'Content-Type:application/octet-stream'."\r\n\r\n";

        $data .= $upload . "\r\n";
        $data .= "--" . static::$delimiter . "--\r\n";
        return $data;
    }

    public static function getInstance() {
        if(!static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }

}
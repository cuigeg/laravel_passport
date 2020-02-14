<?php

namespace App\Http\Controllers\Ding;

use App\Http\Controllers\Controller;

class DingtalkController extends Controller
{
    public function getAccessToken($code)
    {
        if (cache('access_token')) {
            return cache('access_token');
        }
        $client = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_GET, \DingTalkConstant::$FORMAT_JSON);
        $request = new \OapiGettokenRequest();
        $request->setAppkey(env('DINGTALK_APPKEY'));
        $request->setAppsecret(env('DINGTALK_APPSECRET'));
        $res = $client->execute($request);
        file_put_contents('dingtalk.txt', 'get access token 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        if ($res->errcode == 0) {
            cache(['access_token' => $res->access_token], 120);
            file_put_contents('dingtalk.txt', 'getAccessToken返回值：' . PHP_EOL, FILE_APPEND);
            file_put_contents('dingtalk.txt', $res->access_token . PHP_EOL, FILE_APPEND);
            return $res->access_token;
        } else {
            return false;
        }
    }
}

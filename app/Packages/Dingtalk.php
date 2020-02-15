<?php

namespace App\Packages;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Dingtalk extends Model
{
    public static function getAccessToken()
    {
        if (cache('access_token')) {
            return cache('access_token');
        }
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/gettoken?appkey=' . env('DINGTALK_APPKEY').'&appsecret=' . env('DINGTALK_APPSECRET'));
        $res = json_decode((string)$response->getBody());
        if (isset($res->errcode) && $res->errcode == 0) {
            cache(['access_token' => $res->access_token], 120);
            file_put_contents('dingtalk.txt', 'getAccessToken返回值：' . PHP_EOL, FILE_APPEND);
            file_put_contents('dingtalk.txt', $res->access_token . PHP_EOL, FILE_APPEND);
            return $res->access_token;
        } else {
            return false;
        }

//        $client = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_TOP, \DingTalkConstant::$METHOD_GET, \DingTalkConstant::$FORMAT_JSON);
//        $request = new \OapiGettokenRequest();
//        $request->setAppkey(env('DINGTALK_APPKEY'));
//        $request->setAppsecret(env('DINGTALK_APPSECRET'));
//        $res = $client->execute($request);
//        if ($res->errcode == 0) {
//            cache(['access_token' => $res->access_token], 120);
//            file_put_contents('dingtalk.txt', 'getAccessToken返回值：' . PHP_EOL, FILE_APPEND);
//            file_put_contents('dingtalk.txt', $res->access_token . PHP_EOL, FILE_APPEND);
//            return $res->access_token;
//        } else {
//            return false;
//        }
    }

    public static function getUserInfo($userid)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/user/get?access_token='. $access_token .'&userid=' . $userid);
        $res = json_decode((string)$response->getBody());
        file_put_contents('dingtalk.txt', 'getUserId 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        dd($res);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }

    public static function getUserId($code)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/user/getuserinfo?access_token='. $access_token .'&code=' .$code);
        $res = json_decode((string)$response->getBody());
        file_put_contents('dingtalk.txt', 'getUserId 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        dd($res);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }

    public static function getDepartmentList()
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_ids?access_token='. $access_token . '&id=1');
        $res = json_decode((string)$response->getBody());
        file_put_contents('dingtalk.txt', 'getDepartmentList 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        dd($res);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }

    public static function getRoleList()
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/list?access_token='. $access_token);
//        $response->withBody()
        $res = json_decode((string)$response->getBody());
        file_put_contents('dingtalk.txt', 'getDepartmentList 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        dd($res);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }

    public static function sendMessage()
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/message/corpconversation/asyncsend_v2?access_token='. $access_token,[
            'form_params' => [
                'agent_id' => env('DINGTALK_AGENTID'),
                'to_all_user' => 'true',
                'msg' => json_encode(['msgtype' => 'text', 'text'=> ['content' => 'hello world!']])
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        file_put_contents('dingtalk.txt', 'getDepartmentList 返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        dd($res);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }
}

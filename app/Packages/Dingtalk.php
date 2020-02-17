<?php

namespace App\Packages;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Dingtalk extends Model
{
    /**
     * 获取access_token,保存至缓存两小时
     * @return bool|mixed
     * @throws \Exception
     */
    public static function getAccessToken()
    {
        if (cache('access_token')) {
            return cache('access_token');
        }
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/gettoken?appkey=' . env('DINGTALK_APPKEY') . '&appsecret=' . env('DINGTALK_APPSECRET'));
        $res = json_decode((string)$response->getBody());
        if (isset($res->errcode) && $res->errcode == 0) {
            cache(['access_token' => $res->access_token], 120);
            file_put_contents('dingtalk.txt', 'getAccessToken返回值：' . PHP_EOL, FILE_APPEND);
            file_put_contents('dingtalk.txt', $res->access_token . PHP_EOL, FILE_APPEND);
            return $res->access_token;
        } else {
            return false;
        }
    }

    /**
     * 统一处理返回结果
     * @param $res
     * @return bool
     */
    private static function returnData($res)
    {
        file_put_contents('dingtalk.txt', '返回值：' . PHP_EOL, FILE_APPEND);
        file_put_contents('dingtalk.txt', json_encode($res) . PHP_EOL, FILE_APPEND);
        if (isset($res->errcode) && $res->errcode == 0) {
            return $res;
        } else {
            return false;
        }
    }

    /**
     * 获取user详情
     * @param $userid
     * @return bool
     * @throws \Exception
     */
    public static function getUserInfo($userid)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/user/get?access_token=' . $access_token . '&userid=' . $userid);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取userid
     * @param $code
     * @return bool
     * @throws \Exception
     */
    public static function getUserId($code)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/user/getuserinfo?access_token=' . $access_token . '&code=' . $code);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取部门列表
     * @return bool
     * @throws \Exception
     */
    public static function getDepartmentList($id = 1, $fetch_child = 'false', $lang = 'zh_CN')
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_ids?access_token=' . $access_token . '&id=' . $id . '&fetch_child=' . $fetch_child . '&lang=' . $lang);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    public static function getRoleList()
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/list?access_token=' . $access_token);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    public static function sendMessage()
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/message/corpconversation/asyncsend_v2?access_token=' . $access_token, [
            'form_params' => [
                'agent_id' => env('DINGTALK_AGENTID'),
                'to_all_user' => 'true',
                'msg' => json_encode(['msgtype' => 'text', 'text' => ['content' => 'hello world!']])
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }
}

<?php

namespace App\Packages;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use function GuzzleHttp\Psr7\stream_for;

class Dingtalk extends Model
{

//    private $access_token;
//    public static $http;
//    public function __construct(Client $client)
//    {
//        $this->http = $client;
//        $this->access_token = self::getAccessToken();
//    }

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
     *
     *  * userid 员工在当前企业内的唯一标识，也称staffId。可由企业在创建时指定，并代表一定含义比如工号，创建后不可修改
     * unionid 员工在当前开发者企业账号范围内的唯一标识，系统生成，固定值，不会改变
     * name 员工名字
     * tel 分机号（仅限企业内部开发调用）
     * workPlace办公地点
     * remark备注
     * mobile手机号码
     * email员工的电子邮箱
     * orgEmail员工的企业邮箱，如果员工已经开通了企业邮箱，接口会返回，否则不会返回
     * active是否已经激活，true表示已激活，false表示未激活
     * orderInDepts在对应的部门中的排序，Map结构的json字符串，key是部门的Id，value是人员在这个部门的排序值
     * isAdmin是否为企业的管理员，true表示是，false表示不是
     * isBoss是否为企业的老板，true表示是，false表示不是
     * isLeaderInDepts在对应的部门中是否为主管：Map结构的json字符串，key是部门的Id，value是人员在这个部门中是否为主管，true表示是，false表示不是
     * isHide是否号码隐藏，true表示隐藏，false表示不隐藏
     * department成员所属部门id列表
     * position职位信息
     * avatar头像url
     * hiredDate入职时间。Unix时间戳 （在OA后台通讯录中的员工基础信息中维护过入职时间才会返回)
     * jobnumber员工工号
     * extattr扩展属性，可以设置多种属性（手机上最多显示10个扩展属性，具体显示哪些属性，请到OA管理后台->设置->通讯录信息设置和OA管理后台->设置->手机端显示信息设置）。该字段的值支持链接类型填写，同时链接支持变量通配符自动替换，目前支持通配符有：userid，corpid。示例： [工位地址](http://www.dingtalk.com?userid=#userid#&corpid=#corpid#
     * isSenior是否是高管
     * stateCode国家地区码
     * roles用户所在角色列表
     * └ id角色id
     * └ name角色名称
     * └ groupName角色组名称
     */
    public function getUserInfo($userid)
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
     *
     * userid员工在当前企业内的唯一标识，也称staffId
     * is_sys是否是管理员，true：是，false：不是
     * sys_level级别，1：主管理员，2：子管理员，100：老板，0：其他（如普通员工）
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
     *
     * department-部门列表数据，以部门的order字段从小到大排列
     *     id-部门id
     *     name-部门名称
     *     parentid-父部门id，根部门为1
     *     createDeptGroup-是否同步创建一个关联此部门的企业群，true表示是，false表示不是
     *     autoAddUser-当群已经创建后，是否有新人加入部门会自动加入该群, true表示是，false表示不是
     *     ext-部门自定义字段
     */
    public static function getDepartmentList($id = 1, $fetch_child = 'false', $lang = 'zh_CN')
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_ids?access_token=' . $access_token . '&id=' . $id . '&fetch_child=' . $fetch_child . '&lang=' . $lang);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取子部门ID列表
     * @param $id 父部门id
     * @return bool
     * @throws \Exception
     * sub_dept_id_list [1,2,3]
     */
    public static function getDepartmentListIds($id)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_ids?access_token=' . $access_token . '&id=' . $id . '&fetch_child=' . $fetch_child . '&lang=' . $lang);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取部门详情
     * @param $id  部门id
     * @return bool
     * @throws \Exception
     *  id-部门id
     * name-部门名称
     * parentid-父部门id，根部门为1
     * order-当前部门在父部门下的所有子部门中的排序值
     * createDeptGroup-是否同步创建一个关联此部门的企业群，true表示是，false表示不是
     * autoAddUser-当部门群已经创建后，是否有新人加入部门会自动加入该群，true表示是，false表示不是
     * deptHiding-是否隐藏部门，true表示隐藏，false表示显示
     * deptPermits-可以查看指定隐藏部门的其他部门列表，如果部门隐藏，则此值生效，取值为其他的部门id组成的的字符串，使用“\|”符号进行分割
     * userPermits-可以查看指定隐藏部门的其他人员列表，如果部门隐藏，则此值生效，取值为其他的人员userid组成的的字符串，使用“\|”符号进行分割
     * outerDept-是否本部门的员工仅可见员工自己，为true时，本部门员工默认只能看到员工自己
     * outerPermitDepts-本部门的员工仅可见员工自己为true时，可以配置额外可见部门，值为部门id组成的的字符串，使用“\|”符号进行分割
     * outerPermitUsers-本部门的员工仅可见员工自己为true时，可以配置额外可见人员，值为userid组成的的字符串，使用“\|”符号进行分割
     * orgDeptOwner-企业群群主
     * deptManagerUseridList-部门的主管列表，取值为由主管的userid组成的字符串，不同的userid使用“\|”符号进行分割
     * sourceIdentifier-部门标识字段，开发者可用该字段来唯一标识一个部门，并与钉钉外部通讯录里的部门做映射
     * groupContainSubDept-部门群是否包含子部门
     * ext-部门自定义字段
     */
    public static function getDepartmentInfo($id)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/get?access_token=' . $access_token . '&id=' . $id);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 查询部门的所有上级父部门路径
     * @param $id
     * @return bool
     * @throws \Exception
     *
     * parentIds 该部门的所有父部门id列表
     */
    public static function getDepartmentParentDeptsByDept($id)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_parent_depts_by_dept?access_token=' . $access_token . '&id=' . $id);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 查询指定用户的所有上级父部门路径
     * @param $userid
     * @return bool
     * @throws \Exception
     *
     * "department":[[456,123,1],[789,1]]
     * department-该部门的所有父部门id列表
     */
    public static function getDepartmentParentDeptsByUser($userid)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->get('https://oapi.dingtalk.com/department/list_parent_depts?access_token=' . $access_token . '&userId=' . $userid);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取角色列表
     * @param int $size 分页大小，默认值：20，最大值200
     * @param int $offset 分页偏移，默认值：0
     * @return bool
     * @throws \Exception
     *
     * result
     * └ hasMore是否还有更多数据
     * └ list
     *     └ name角色组名称
     *     └ groupId角色组id
     *     └ roles
     *         └ name角色名称
     *         └ id角色id
     */
    public static function getRoleList($size = 20, $offset = 0)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/list?access_token=' . $access_token, [
            'form_params' => [
                'size' => $size,
                'offset' => $offset,
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取角色下的员工列表
     * @param $role_id
     * @param int $size
     * @param int $offset
     * @return bool
     * @throws \Exception
     *
     * result 返回结果
     * └ hasMore是否还有更多数据
     * └ list
     *     └ userid员工id
     *     └ name员工姓名
     */
    public static function getRoleSimpleList($role_id, $size = 20, $offset = 0)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/simplelist?access_token=' . $access_token, [
            'form_params' => [
                'role_id' => $role_id,
                'size' => $size,
                'offset' => $offset,
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取角色组
     * @param $group_id
     * @return bool
     * @throws \Exception
     *
     * role_group角色组信息
     *     └ roles角色列表信息
     *         └ role_id角色id
     *         └ role_name角色名
     *     └ group_name角色组名
     */
    public static function getRoleGroup($group_id)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/getrolegroup?access_token=' . $access_token, [
            'form_params' => [
                'group_id' => $group_id,
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    /**
     * 获取角色详情
     * @param $roleid
     * @return bool
     * @throws \Exception
     *
     * role角色信息
     *     └ groupId角色组id
     *     └ name角色名
     */
    public static function getRoleInfo($roleid)
    {
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/role/getrole?access_token=' . $access_token, [
            'form_params' => [
                'roleId' => $roleid,
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    public static function sendMessage($msg, $to_all_user = true, $userid_list = [], $dept_id_list = [])
    {
        if (!$to_all_user && (!$userid_list || !$dept_id_list)) {
            return false;
        }
        $access_token = self::getAccessToken();
        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/topapi/message/corpconversation/asyncsend_v2?access_token=' . $access_token, [
            'form_params' => [
                'agent_id' => env('DINGTALK_AGENTID'),
                'to_all_user' => $to_all_user ? 'true' : 'false',
                'userid_list' => implode($userid_list, ','),
                'dept_id_list' => implode($dept_id_list, ','),
                'msg' => json_encode($msg)
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        return self::returnData($res);
    }

    private static function messageType()
    {
        return [
            'text' => ['content'],
            'image' => ['media_id'],
            'voice' => ['media_id', 'duration'],
            'file' => ['media_id'],
            'link' => ['messageUrl', 'picUrl', 'title', 'text'],
            'oa' => [
                'message_url',
                'head' => ['bgcolor', 'text'],
                'body' => ['title', 'form' => ['key', 'value']],
                'rich' => ['num', 'unit'],
                'content',
                'image',
                'file_count',
                'author'
            ],
            'markdown' => ['title', 'text'],
            'action_card' => ['title', 'markdown', 'single_title', 'single_url'],
            'action_card' => ['title', 'markdown', 'btn_orientation', 'btn_json_list' => ['title', 'action_url']],
        ];
    }

    /**
     * @param $type
     * 图片（image）:1MB，支持JPG格式
     * 语音（voice）：2MB，播放长度不超过60s，AMR格式
     * 普通文件（file）：10MB
     * @param $media
     * @return bool
     * @throws \Exception
     * type    媒体文件类型，分别有图片（image）、语音（voice）、普通文件(file)
     * media_id    媒体文件上传后获取的唯一标识
     * created_at 媒体文件上传时间戳
     */
    public static function uploadMedia($type, $media)
    {
        $access_token = self::getAccessToken();
        $data = '';
        $decimiter = '---------------' . uniqid();
        $data .= "--" . $decimiter . "\r\n";
        $data .= 'Content-Disposition:form-data; name="' . 'media' . '"; filename="' . $media->getClientOriginalName() . "\" \r\n";
        $data .= 'Content-Type:application/octet-stream; ' . "\r\n\r\n";
        $data .= file_get_contents($media->getRealPath()) . "\r\n";
        $data .= "--" . $decimiter . "--";
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, 'https://oapi.dingtalk.com/media/upload?access_token=' . $access_token . '&type=' . $type); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type:multipart/form-data; boundary=' . $decimiter,
            'Content-Length:' . strlen($data)
        ]);
        curl_setopt($curl, CURLOPT_TIMEOUT, 300); // 设置超时限制防止死循环
        $res = curl_exec($curl); // 执行操作
        curl_close($curl);

        $data = json_decode($res);
        return self::returnData($data);

        $access_token = self::getAccessToken();
        $stream = stream_for(fopen($media->getRealPath(), 'r'));

        $http = new Client();
        $response = $http->post('https://oapi.dingtalk.com/media/upload?access_token=' . $access_token . '&type=' . $type, [
            'headers' => [
                'Content-Type' => 'multipart/form-data;',
                'Content-Length' => strlen($stream)
            ],
            'multipart' => [
                ['name' => 'access_token', 'contents' => $access_token],
                ['name' => 'type', 'contents' => $type],
                ['name' => 'media', 'contents' => $stream, 'filename' => $media->getFilename(), 'filelength' => $media->getSize(), 'content-type' => $media->getClientMimeType()]
            ]
        ]);
        $response = $http->post('https://oapi.dingtalk.com/media/upload?access_token=' . $access_token . '&type=' . $type, [
//            'form_params' => [
//                'type' => $type,
//                'media' => $_FILES['media']
////                'media' => ['filename' => $media->getRealPath(), 'filelength' => $media->getSize(),'content-type' => $media->getClientMimeType()]
////            'media' => new \CURLFile($media->getRealPath(),$media->getClientMimeType(), $media->getClientOriginalName())
//////            'media' => new \CURLFile($media)
//            ]
            'headers' => [
                'Content-Type' => 'multipart/form-data'
            ],
            'multipart' => [
//                'meida' => ['filename' => $media->getRealPath(), 'filelength' => $media->getSize(), 'content-type' => $media->getClientMimeType()]
                ['name' => 'type', 'contents' => $type],
                [
                    'name' => 'media',
                    'contents' => fopen($media->getRealPath(), 'r'),
                    'filename' => $media->getRealPath(), 'filelength' => $media->getSize(), 'content-type' => $media->getClientMimeType(),
                    'headers' => ['Content-Type' => 'bar']
                ]
            ]
        ]);
        $res = json_decode((string)$response->getBody());
        dd($res);
        return self::returnData($res);
    }
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens,Notifiable;

    public $table = "admin";
    public $timestamps = false;

    /** 修改默认验证用户名
     * @param $username
     * @return mixed
     */
    public function findForPassport($username)
    {
        return $this->Where('username', $username)->first();
    }

//    /** 修改验证密码规则
//     * @param $password
//     * @return bool
//     */
//    public function validateForPassportPasswordGrant($password)
//    {
//        //如果请求密码等于数据库密码 返回true（此为实例，根据自己需求更改）
//        if($password == $this->password){
//            return true;
//        }
//        return false;
//    }

    /** Auth2.0 设置用户ID（创建关联关系，如果你本地没有报错，就不需要使用这一句）
     *  使用位置：Laravel\Passport\Bridge\UserRepository
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public static function createOrSave($data)
    {
        $admin = new Admin();
        $admin->username = $data['username'];
        $admin->password = $data['password'];
        return $admin->save();
    }
}

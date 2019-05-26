
##  Laravel possport包的基本测试

更新时间：2019-05-26
## 1. 单表用户登录
### 1.1 安装
首先通过 Composer 包管理器安装 Passport：
>根据laravel不同的版本，加载不同的管理包，如果你使用laravel5.4版本；使用命令composer require laravel/passport v4.*;不然可能因为版本问题，加载失败
```
composer require laravel/passport v4.*
```
成功安装Passport包之后，我们需要设置他们的服务提供者。所以，打开你的config / app.php文件，并在其中添加以下提供程序。
```
'providers' => [
    ....
    Laravel\Passport\PassportServiceProvider::class,
],
```
### 1.2 迁移数据库
Passport 服务提供者为框架注册了自己的数据库迁移目录，所以在注册服务提供者之后（Laravel 5.5之后会自动注册服务提供者）需要迁移数据库，Passport 迁移将会为应用生成用于存放客户端和访问令牌的数据表：
```
php artisan migrate
```
### 1.3 生成加密键oauth_clients
```
php artisan passport:install
```
该命令将会创建生成安全访问令牌（token）所需的加密键
此外，该命令还会创建“personal access”和“password grant”客户端用于生成访问令牌,生成记录存放在数据表 oauth_clients
### 1.4 修改user模型
添加 Laravel\Passport\HasApiTokens trait 到 App\User 模型，该 trait 将会为模型类提供一些辅助函数用于检查认证用户的 token 和 scope
```
<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
}
```
#### 1.4.1 验证字段进行修改
>默认验证email，如果你验证字段不是email，这里可以充值验证规则

例：验证phone和email一起验证；在User模型中添加如下方法：
```
 public function findForPassport($username)
 {
     return $this->orWhere('email', $username)->orWhere('phone', $username)->first();
 }
```
#### 1.4.1 密码验证进行修改
>默认验证密码规则为Hash  如果你的密码验证规则不是Hash这里需要更改

例：请求密码等于数据库密码
```
 public function validateForPassportPasswordGrant($password)
 {
     //如果请求密码等于数据库密码 返回true（此为实例，根据自己需求更改）
     if($password == $this->password){
         return true;
     }
     return false;
 }
```
### 1.5 注册获取Token路由
接下来，需要在 AuthServiceProvider 的 boot 方法中调用 Passport::routes 、enableImplicitGrant、tokensCan、tokensExpireIn、refreshTokensExpireIn具体作用看注释
```
<?php

namespace App\Providers;

use Carbon\Carbon;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        // accessToken有效期
        Passport::tokensExpireIn(Carbon::now()->addDays(15)); 
        // accessRefushToken有效期
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
    }
}
```
### 1.6 修改项目auth配置文件
文件位置：congig/auth.php 接口使用api， 保护项（ driver ）改为 passport 。
此调整会让你的应用程序在接收到 API 的授权请求时使用 Passport 的 TokenGuard 来处理：
```
return [
    .....
    'guards' => [
       ...
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],
    .....
]
```
### 1.7 配置完成，测试使用
创建路由(router/api.php) 验证为：auth中间件，guards为api
```
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});
```
编辑控制器
>文件位置```app\Http\Controllers\API\UserController.php```如果找不到自行创建

```
<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;
    public $failStatus = 500;

    /**
     * 登录
     * */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            //删除之前的token（此删除适合方法一）
            \DB::table('oauth_access_tokens')->where('user_id',$user->id)->where('name','MyApp')->update(['revoked'=>1]);

            //获取新的token
            $success['token'] = $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    /**
     * 注册
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::createOrSave($input);
        if($user){
            $success['token'] = $user->createToken('api')->accessToken;
            $success['name'] =  $input['name'];

            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['file'=>'Information error'], $this->failStatus);
        }
    }

    /**
     * 获取用户详情
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
```
## 2 多表用户登录
>现在大部分公司用到前后端分离技术，可能存在APP，Web，小程序共存的情况，就会出现多表处理Token值;已微信小程序登录为例：

### 2.1 新建并编辑模型Admin
>我这随便建了一个表，用于测试，大家根据自己需求，绑定自己的表
```
php artisan make:model Models/Admin
```
编辑Admin模型如下：
```
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
        $admin = New Admin();
        $admin->username = $data['username'];
        $admin->password = $data['password'];
        return $admin->save();
    }
}
```

### 2.2 修改项目auth配置文件（UserCus表为用户表）
文件位置：congig/auth.php 接口使用xcx， 保护项（ driver ）改为 passport 。
此调整会让你的应用程序在接收到 API 的授权请求时使用 Passport 的 TokenGuard 来处理：
```
<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
        'xcx' => [
            'driver' => 'passport',
            'provider' => 'usercu',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'usercu' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];

```
### 2.3 配置完成，测试使用
创建路由(router/api.php) 验证为：中间件为3.5重置验证规则中间件
```
Route::post('wx/register', 'API\UserController@WxRegister');
Route::post('wx/login', 'API\UserController@WxLogin');

Route::group(['middleware' => 'auth:xcx'], function(){
    Route::post('wx/details', 'API\UserController@WxDetails');
});
```
UserController新增wxlogin、WxRegister、WxDetails方法(下面方法为测试方法，根据自己实际需求写自己的方法)
```
<?php

namespace App\Http\Controllers\API;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    use ProxyTrait;
    public $successStatus = 200;
    public $failStatus = 500;

	    /**
     *  微信小程序注册
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WxRegister(Request $request)
    { $validator = Validator::make($request->all(), [
        'username' => 'required',
        'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = Admin::createOrSave($input);
        $admin = Admin::where('username',$request->input('username'))->first();
        if($user){
            $success['token'] = $admin->createToken('api')->accessToken;
            $success['name'] =  $input['username'];

            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['file'=>'Information error'], $this->failStatus);
        }
    }

    /**
     *  微信小程序登录
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WxLogin(Request $request)
    {
        $admin = Admin::where('username',$request->input('username'))->first();
        if($admin && password_verify($request->input('password'),$admin->password)){
            \DB::table('oauth_access_tokens')->where('user_id',$admin->id)->where('name','xcx')->update(['revoked'=>1]);
            //方法一：获取新的token
            $success['token'] = $admin->createToken('xcx')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    /**
     * 查看用户详情
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function WxDetails(Request $request)
    {
        $user = Admin::where('id',$request->input('id'))->first();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
```
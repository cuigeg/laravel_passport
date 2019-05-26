<?php

namespace App\Http\Controllers\API;

use App\Models\Admin;
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
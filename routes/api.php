<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// 测试API
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});

//测试XCX
Route::post('wx/register', 'API\UserController@WxRegister');
Route::post('wx/login', 'API\UserController@WxLogin');

Route::group(['middleware' => 'auth:xcx'], function(){
    Route::post('wx/details', 'API\UserController@WxDetails');
});

Route::get('api/dingtalk', function (Request $request){
    dd($request->query);
});
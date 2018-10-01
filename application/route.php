<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::get('/', 'api/Index/index');
//用户管理
Route::group('user',function (){
    Route::post('addNew', 'api/v1.UserController/addNewGuy');//添加新用户
    Route::post('changeLoginInfo', 'api/v1.UserController/changeLoginInfo');//修改登录账号和密码
    Route::post('updateUserInfo', 'api/v1.UserController/updateUserInfo');//修改登录账号和密码

});

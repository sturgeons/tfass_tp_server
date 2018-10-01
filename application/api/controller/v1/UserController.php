<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 22:14
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\exception\lib\FailException;
use app\exception\lib\SuccessMessage;
use app\exception\lib\SucessException;
use app\model\UserInfo;
use app\model\UserList;
use think\Exception;

class UserController extends BaseController
{
//新增人员
    /**
     * @throws FailException
     * @throws SucessException
     */
    public function addNewGuy()
    {
        try {
            $name = input('post.user_name');
            $token = getAuthCode();
            $status = 1;
            $code = input('post.user_code');
            $newUserModel = new UserList();
            $saveRes = $newUserModel->save([
                'code' => $code,
                'status' => $status,
                'token' => $token,
                'user_name' => $name,
                'login_name' => $token
            ]);
            if ($saveRes == 1) {
                throw new SucessException(['msg' => '添加成功' . $saveRes]);
            }
        } catch (Exception $e) {
            throw  new FailException(['msg' => '添加失败，可能存在重复信息。']);
        }

    }

//    更新用户名和密码
    public function changeLoginInfo()
    {
        try {
            $code = input('post.user_code');
            $loginName = input('post.login_name');
            $loginPassword = input('post.login_password');
            $userInfo = new UserList();
            $res = $userInfo->where('code', $code)
                ->update([
                    'login_name' => $loginName,
                    'login_password' => $loginPassword
                ]);
            if ($res == 1) {
                return $this->updateSuccess();
            }
        } catch (Exception $e) {
            throw  new FailException(['msg' => '更新失败']);
        }
    }

//    更新用户信息
    public function updateUserInfo()
    {

        try {
            $userInfoGetCurrent = UserInfo::get(['code' => input('post.user_code')]);
            $userInfo = new UserInfo();
                $userInfo
                    ->isUpdate($userInfoGetCurrent)
                    ->save([
                    'code' => input('post.user_code'),
                    'name' => input('post.name'),
                    'phone_number' => input('post.phone_number'),
                    'age' => input('post.age'),
                    'birthday' => input('post.birthday'),
                    'shoes_size' => input('post.shoes_size'),
                    'locker_code' => input('post.locker_code'),
                    'clothes_size' => input('post.clothes_size')
                ]);
            $callback = new SuccessMessage([
                'msg'=>'Update Success',
                'user_info' => $userInfo]);
            return $callback->getMessage();
        } catch (Exception $e) {
            throw  new FailException(['msg' => '更新失败']);
        }

    }
}
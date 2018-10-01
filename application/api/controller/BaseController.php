<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 22:01
 */

namespace app\api\controller;


use app\exception\lib\SuccessMessage;
use think\Controller;

class BaseController extends Controller
{

    public function updateSuccess()
    {
        $callback = new SuccessMessage(['msg' => '更新成功']);
        return $callback->getMessage();
    }
}
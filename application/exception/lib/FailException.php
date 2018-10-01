<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 17:46
 */

namespace app\exception\lib;


use app\exception\BaseException;

class FailException extends BaseException
{
//  状态标识符
    public $statue = false;
// 响应码
    public $code=200;
//  数据集
    public $data = null;
//    状态码
    public $statusCode = 987;

    /**
     * SuccessException constructor.
     * @param null $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
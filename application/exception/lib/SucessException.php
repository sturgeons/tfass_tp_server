<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 17:46
 */

namespace app\exception\lib;


use app\exception\BaseException;

class SucessException extends BaseException
{
//  状态标识符
    public $statue = true;
// 响应码
    public $code;
//  数据集
    public $data = null;
//    状态码
    public $statusCode = 200;

    /**
     * SuccessException constructor.
     * @param null $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
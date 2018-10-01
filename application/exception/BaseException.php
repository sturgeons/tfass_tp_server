<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 17:45
 */

namespace app\exception;


use think\Exception;

class BaseException extends Exception
{
//  状态标识符
    public $statue = false;
// 响应码
    public $code;
//  数据集
    public $data = null;
//    状态码
    public $statusCode = 200;


    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
        }
        if (array_key_exists('statue', $params)) {
            $this->statue = $params['statue'];
        }
        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (array_key_exists('statusCode', $params)) {
            $this->statusCode = $params['statusCode'];
        }
        if (array_key_exists('data', $params)) {
            $this->data = $params['data'];
        }
        if (array_key_exists('statusCode', $params)) {
            $this->statusCode = $params['statusCode'];
        }
    }
}
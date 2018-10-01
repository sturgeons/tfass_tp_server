<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 17:45
 */

namespace app\exception;


use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends  Handle
{
//状态标识符
    public $statue = false;
// 信息代码
    public $code=500;
//数据集
    public $data =  ['msg' => '服务器存在致命错误'];
//    状态码
    public $statusCode = 200;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            $this->statue = $e->statue;
            $this->code = $e->code;
            $this->data = $e->data;
            $this->statusCode =$e->statusCode;
        } else {
            if (config('app_debug')) {
                // 如果在调试阶段，方便查看错误信息，利用原有的错误渲染页面
                return parent::render($e);
            } else {
                $this->recordException($e);
            }
        }
        $request = Request::instance();
        $res = [
            'url' => $request->url(),
            'statue' => $this->statue,
            'statusCode' => $this->statusCode,
            'data' => $this->data

        ];
        return json($res, $this->code);

    }

    /*
 * 记录错误日志
 */
    private function recordException(Exception $e)
    {
        Log::init([
            'type' => 'File',
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}
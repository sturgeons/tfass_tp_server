<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 17:40
 */

namespace app\api\controller;


use app\exception\lib\SucessException;

class Index
{
    public function index($page)
    {
//    phpinfo();
//        $iii=date('ymdhis', time());
//        $iii=180916123051;
//        $in= (float)$iii;
//        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
//        $res = "";
//        while ($in !=0) {
//            $inElement = floor($in / 62);
//            $code = $in -$inElement*62;
//            $res = substr($strPol, $code, 1) . $res;
//            $in = $inElement;
//        }
//
//        return $res;
//
//        $str="z5pZ0UN";
//        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
//        $res = 0;
//        for ($i = 0; $i < strlen($str); $i++) {
//            $y=strlen($str) - $i-1;
//            $xy=pow(62, $y);
//            $ssp=substr($str, $i, 1);
//            $es=strpos($strPol, $ssp);
//            $e= $es*$xy;
//            $res = $e+$res;
//        }
//        return $res;



        throw  new SucessException([
            'date' => $page
        ]);


    }
}
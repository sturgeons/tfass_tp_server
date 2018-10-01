<?php
/**
 * Created by PhpStorm.
 * User: yx392
 * Date: 2018/9/15
 * Time: 22:16
 */

namespace app\model;


use think\Model;

class BaseModel extends Model
{

    protected $autoWriteTimestamp=true;
    protected $field=true;
    protected  $pk='code';
}
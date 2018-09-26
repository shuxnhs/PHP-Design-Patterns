<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 20:42
 */
namespace IMooc;
class HuaweiFactory implements Factory{
    static function buyPhone()
    {
        return new Huawei();
    }
}
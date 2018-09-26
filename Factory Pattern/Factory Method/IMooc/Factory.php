<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 16:07
 */

namespace IMooc;

use IMooc\Iphone;

interface Factory
{
    static function buyPhone();
}
//引入接口的目的是为了实现多继承
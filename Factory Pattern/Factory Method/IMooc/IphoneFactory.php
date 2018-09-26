<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 20:40
 */
namespace IMooc;
class IphoneFactory implements Factory{

    static function buyPhone()
    {
        return new Iphone();
    }
}
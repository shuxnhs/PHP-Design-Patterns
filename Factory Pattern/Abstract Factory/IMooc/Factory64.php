<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/27
 * Time: 10:39
 */
namespace IMooc;

class Factory64 implements AbstractFactory{
    function buyHuawei()
    {
        return new Huawei64();
    }

    function buyIphone()
    {
        return new Iphone64();
    }
}
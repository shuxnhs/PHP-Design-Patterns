<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 16:14
 */
namespace IMooc;

class Iphone implements Product{

    public function buy()
    {
        echo "Iphone buy successful\n";
    }
}
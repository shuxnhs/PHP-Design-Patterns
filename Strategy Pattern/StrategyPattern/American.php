<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/8
 * Time: 23:52
 */
namespace StrategyPattern;
class American implements Strategy{

    function service()
    {
        echo "请吃汉堡薯条";
    }
}
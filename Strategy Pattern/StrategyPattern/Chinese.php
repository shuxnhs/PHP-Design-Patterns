<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/8
 * Time: 23:51
 */

namespace StrategyPattern;


class Chinese implements Strategy
{

    function service()
    {
        echo "请吃米饭";
    }
}
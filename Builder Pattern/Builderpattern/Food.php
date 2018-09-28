<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/28
 * Time: 15:34
 */
namespace Builderpattern;
class Food{
    public $_one;
    public $_two;
    public $_three;

    function CookProcess(){
        echo "{$this->_one}";
        echo "{$this->_two}";
        echo "{$this->_three}\n";
    }

}
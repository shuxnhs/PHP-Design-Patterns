<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/28
 * Time: 15:35
 */
namespace Builderpattern;
class Builder1 extends Builder{

    function addoil()
    {
        $this->_Food->_one="加油";
    }

    function addfood()
    {
        $this->_Food->_two="加菜";
    }

    function addsalt()
    {
        $this->_Food->_three="加盐";
    }

    function getFood()
    {
        return $this->_Food;
    }
}
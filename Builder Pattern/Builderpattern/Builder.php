<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/28
 * Time: 15:34
 */
namespace Builderpattern;

abstract class Builder{

    protected $_Food;

    function __construct()
    {
        $this->_Food=new Food();
    }

    abstract function addoil();

    abstract function addfood();

    abstract function addsalt();

    abstract function getFood();

}
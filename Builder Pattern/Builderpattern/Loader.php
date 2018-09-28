<?php
/**
 * Created by PhpStorm.
 * User: 何晓宏
 * Date: 2018/9/26
 * Time: 0:08
 */
namespace Builderpattern;

class Loader{
    static function autoload($class){

        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';

    }

}
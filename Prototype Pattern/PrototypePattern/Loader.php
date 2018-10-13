<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/13
 * Time: 16:58
 */
namespace PrototypePattern;

class Loader{
    static function autoload($class){
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}
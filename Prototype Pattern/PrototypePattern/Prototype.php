<?php
/**
 * Created by IntelliJ IDEA.
 * User: 何晓宏
 * Date: 2018/10/14
 * Time: 1:18
 */
namespace PrototypePattern;

interface Prototype{

    //浅拷贝,只拷贝当前对象实例不拷贝引用的对象
    public function shallowCopy();

    //深拷贝，把拷贝的对象引用的对象也拷贝，利用序列化serialize来做拷贝
    public function deepCopy();
}